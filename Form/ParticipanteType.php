<?php

namespace GanemosMadridPlenarioFormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParticipanteType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nombre')
                ->add('email', 'email')
                ->add('primeraVez', 'choice', array(
                    'choices' => array(1 => 'Si', 0 => 'No'),
                    'expanded' => true
                ))
                ->add('listaInformacion', 'choice', array(
                    'choices' => array('Si', 'No', 'Ya estoy inscrita'),
                    'expanded' => true,
                ))
                ->add('gruposTrabajo', 'choice', array(
                    'choices' => array(
                        'Movimiento municipalista',
                        'Contenidos y Programa',
                        'Herramientas y Metodología',
                        'Comunicación',
                        'Candidaturas',
                        'Feminismos',
                        'Coordinación',
                    ),
                    'required' => false,
                    'multiple' => true))
                ->add('distrito', 'choice', array(
                    'empty_value' => '-- Elige tu distrito --',
                    'choices' => array(
                        1 => 'Centro',
                        2 => 'Arganzuela',
                        3 => 'Retiro',
                        4 => 'Salamanca',
                        5 => 'Chamartín',
                        6 => 'Tetuán',
                        7 => 'Chamberí',
                        8 => 'Fuencarral - Pardo',
                        9 => 'Moncloa - Aravaca',
                        10 => 'Latina',
                        11 => 'Carabanchel',
                        12 => 'Usera',
                        13 => 'Puente de Vallecas',
                        14 => 'Moratalaz',
                        15 => 'Ciudad Lineal',
                        16 => 'Hortaleza',
                        17 => 'Villaverde',
                        18 => 'Villa de Vallecas',
                        19 => 'Vicálvaro',
                        20 => 'San Blas - Canillejas',
                        21 => 'Barajas',
                        22 => 'Fuera de Madrid'),
                    'required' => true,))
                //->add('codigoPostal', 'text')
                ->add('presentacion', 'choice', array(
                    'choices' => array(1 => 'Si', 0 => 'No'),
                    'expanded' => true
                ))
                ->add('colectivosBarrio', 'textarea', array('required' => false))
                ->add('invitados', 'textarea', array('required' => false))
                ->add('sectorialEmpleo', 'choice', array(
                    'choices' => array(
                        'Auditoría deuda municipal',
                        'Actividad económica y empleo',
                        'Desigualdad / precariedad / exclusión social',
                        'Control de actividades económicas',
                        'Contratación y obra pública',
                        'Empresas municipales',
                        'Sector público',
                        'Fiscalidad y gestión económica',
                    ),
                    'required' => false,
                    'multiple' => true))
                ->add('sectorialDerechos', 'choice', array(
                    'choices' => array(
                        'Educacion' => array(
                            1 => 'Escuelas infantiles',
                            2 => 'Primaria y secundaria',
                            3 => 'Centros sociales, culturales, blibliotecas y de investigación'
                        ),
                        'Salud' => array(
                            4 => 'Sistema sanitario',
                            5 => 'Entorno saludable',
                            6 => 'Vida saludable',
                        ),
                        'Vivienda' => array(
                            7 => 'En propiedad',
                            8 => 'En alquiler',
                            9 => 'Protegida',
                            10 => 'Pública',
                            11 => 'Uso del suelo',
                            12 => 'Normativa',
                            13 => 'Fiscalidad',
                            14 => 'Control',
                        ),
                        15 => 'Servicios Sociales',
                        16 => 'Cultura',
                        17 => 'Ocio',
                        18 => 'Deporte',
                        19 => 'Espacio público',
                        'Servicios públicos' => array(
                            20 => 'Mercados municipales',
                            21 => 'Cementerios',
                            22 => 'Policía',
                            23 => 'Bomberos',
                            24 => 'Emergencias',
                            25 => 'Protección Civil',
                        ),
                    ),
                    'required' => false,
                    'multiple' => true))
                ->add('sectorialGobierno', 'choice', array(
                    'choices' => array(
                        'Transparencia' => array(
                            1 => 'De la gestión',
                            2 => 'De los datos',
                        ),
                        3 => 'Publicación de las facturas que genere la actuación de toda Administración Pública',
                        4 => 'Descentralización territorial',
                        'Gestión democrática del gobierno municipal' => array(
                            5 => 'Presupuesto participativos',
                            6 => 'Convivencia',
                            7 => 'Organigrama de gobierno',
                        ),
                        8 => 'Control de la representación',
                        'Organización interterritorial' => array(
                            9 => 'Interminicipal',
                            10 => 'Interbarrios',
                        ),
                    ),
                    'required' => false,
                    'multiple' => true))
                ->add('sectorialCiudad', 'choice', array(
                    'choices' => array(
                        1 => 'Modelo urbanístico y usos del suela',
                        2 => 'Movilidad',
                        'Suministros y residuos' => array(
                            3 => 'Agua',
                            4 => 'Energía',
                            5 => 'Telecomunicaciones',
                            6 => 'Aire',
                            7 => 'Basuras y limpieza',
                        )
                    ),
                    'required' => false,
                    'multiple' => true))
                ->add('save', 'submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GanemosMadridPlenarioFormBundle\Entity\Participante'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ganemosmadrid_plenarioformbundle_participante';
    }

}
