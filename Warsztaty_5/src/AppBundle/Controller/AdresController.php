<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/adres")
 * @Template("AppBundle:Adres:create.html.twig")
 */
class AdresController extends Controller
{
    /**
     * @Route("/create")
     * @Template("AppBundle:Adres:create.html.twig")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Adres:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/read")
     * @Template("AppBundle:Adres:read.html.twig")
     */
    public function readAction()
    {
        return $this->render('AppBundle:Adres:read.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/update")
     * @Template("AppBundle:Adres:update.html.twig")
     */
    public function updateAction()
    {
        return $this->render('AppBundle:Adres:update.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     * @Template("AppBundle:Adres:delete.html.twig")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Adres:delete.html.twig', array(
            // ...
        ));
    }

}
