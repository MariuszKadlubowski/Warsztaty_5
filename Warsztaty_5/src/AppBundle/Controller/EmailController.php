<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/email")
 */
class EmailController extends Controller
{
    /**
     * @Route("/create")
     * @Template("AppBundle:Email:create.html.twig")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Email:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/read")
     * @Template("AppBundle:Email:read.html.twig")
     */
    public function readAction()
    {
        return $this->render('AppBundle:Email:read.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/update")
     * @Template("AppBundle:Email:update.html.twig")
     */
    public function updateAction()
    {
        return $this->render('AppBundle:Email:update.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     * @Template("AppBundle:Email:delete.html.twig")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Email:delete.html.twig', array(
            // ...
        ));
    }

}
