<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/contact")
 */
class ContactController extends Controller
{
    /**
     * @Route("/create")
     * @Template("AppBundle:Contact:create.html.twig")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Contact:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/read")
     * @Template("AppBundle:Contact:read.html.twig")
     */
    public function readAction()
    {
        return $this->render('AppBundle:Contact:read.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/update")
     * @Template("AppBundle:Contact:update.html.twig")
     */
    public function updateAction()
    {
        return $this->render('AppBundle:Contact:update.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     * @Template("AppBundle:Contact:delete.html.twig")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Contact:delete.html.twig', array(
            // ...
        ));
    }

}
