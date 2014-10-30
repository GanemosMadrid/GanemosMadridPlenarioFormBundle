<?php

// src/GanemosMadrid/PlenarioFormBundle/Command/UpdateMapCommand.php

namespace GanemosMadridPlenarioFormBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use GanemosMadridPlenarioFormBundle\Entity\Participante;

class UpdateMapCommand extends ContainerAwareCommand
{

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
                ->setName('gm:map:update')
                ->setDescription('Actualiza el mapa de distritos con la densidad de participantes')
                ->setHelp(<<<EOF
<info>%command.name%</info> actualiza el mapa de cartodb con los últimos datos del formulario
EOF
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Cargando datos del formulario.');

        $datos = $this->getContainer()->get('doctrine')
                ->getRepository('GanemosMadridPlenarioFormBundle:Participante')
                ->getData();

        $output->writeln('Subiendo datos a cartodb.');

        foreach ($datos as $distrito => $participantes) {
            $sql = sprintf('UPDATE distritos SET participantes = %s WHERE cartodb_id = %s', $participantes, $distrito);

            $this->request($sql);
            $output->writeln('.');
        }
        $output->writeln('<info>Mapa actualizado!</info>');
    }

    private function request($sql, $method = 'GET', $args = array())
    {
        $cartodb_api_key = '1850e4967bd87254cc4d4b5c3b0cff6066b8e2d1';
        $cartodb_username = 'roxu';

        $ch = curl_init('https://' . $cartodb_username . '.cartodb.com/api/v2/sql');
        $query = http_build_query(array('q' => $sql, 'api_key' => $cartodb_api_key));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $result = curl_exec($ch);

        curl_close($ch);
    }

}
