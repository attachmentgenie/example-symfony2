<?php

namespace Attachmentgenie\ExampleBackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AttachmentgenieExampleBackendBundle:Default:index.html.twig', array('name' => $name));
    }
}
