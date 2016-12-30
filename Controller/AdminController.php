<?php

namespace DidUngar\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdminController extends Controller
{
    /**
     * @Route("/admin")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('DidUngarMenuBundle:Menu');
        $lst = $rep->findBy([], ['id'=>'DESC'], 1000);
        return $this->render('DidUngarMenuBundle:Admin:index.html.twig', [
                'lst' => $lst,
        ]);
    }

    /**
     * @Route("/admin/{id_menu}")
     * @Template()
     */
    public function menuAction($id_menu)
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('DidUngarMenuBundle:MenuLink');
        $lst = $rep->findBy(['idMenu'=>$id_menu], ['id'=>'DESC'], 1000);
        return $this->render('DidUngarMenuBundle:Admin:menu.html.twig', [
		'id_menu' => $id_menu,
                'lst' => $lst,
        ]);
    }
}
