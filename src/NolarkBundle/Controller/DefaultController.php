<?php

namespace NolarkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('NolarkBundle::index.html.twig');
    }

    /**
     * @Route("/casque/{type}", requirements={"type": "\w+"}, name="route")
     */
    public function casqueAction($type){
        $ExistingType = $this->getDoctrine()->getRepository('NolarkBundle:type')->getArrayType();

        foreach ($ExistingType as $i) {
            if ($i['libelle'] === $type) {
                $casques = $this->getDoctrine()->getRepository('NolarkBundle:casque')->getCasqueByType($type);
                
                return $this->render('NolarkBundle::casque.html.twig', array('type' => $type, 'casques' => $casques));
            }
        }
        
        throw $this->createNotFoundException('Le type de casque n\'existe pas');
    }

    /**
     * @Route("/team", name="team")
     */
    public function teamAction() {
        return $this->render('NolarkBundle::team.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction() {
        return $this->render('NolarkBundle::contact.html.twig');
    }
}
