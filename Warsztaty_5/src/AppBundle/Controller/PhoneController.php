<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/phone")
 */
class PhoneController extends Controller
{
    /**
     * @Route("/create")
     * @Template("AppBundle:Phone:create.html.twig")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Phone:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/read")
     * @Template("AppBundle:Phone:read.html.twig")
     */
    public function readAction()
    {
        return $this->render('AppBundle:Phone:read.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/update")
     * @Template("AppBundle:Phone:update.html.twig")
     */
    public function updateAction()
    {
        return $this->render('AppBundle:Phone:update.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     * @Template("AppBundle:Phone:delete.html.twig")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Phone:delete.html.twig', array(
            // ...
        ));
    }

}
