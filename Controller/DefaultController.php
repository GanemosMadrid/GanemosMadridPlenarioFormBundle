<?php

namespace GanemosMadridPlenarioFormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use GanemosMadridPlenarioFormBundle\Entity\Participante;
use GanemosMadridPlenarioFormBundle\Form\ParticipanteType;

class DefaultController extends Controller
{

    /**
     * @Route("/plenario/formulario")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $participante = new Participante();

        $form = $this->createForm(new ParticipanteType(), $participante);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($participante);
            $em->flush();
            
            return $this->redirect($this->generateUrl('ok'));
        }

        return $this->render('GanemosMadridPlenarioFormBundle:Default:index.html.twig', array(
                    'form' => $form->createView(),
        ));
    }
    
    /**
     * @Route("/plenario/formulario_ok", name="ok")
     * @Template()
     */
    public function formularioOkAction()
    {
        return array();
    }
}
