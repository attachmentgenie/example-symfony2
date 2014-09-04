<?php

namespace Attachmentgenie\ExampleFrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AttachmentgenieExampleFrontendBundle:Default:index.html.twig', array('name' => $name));
    }
}
