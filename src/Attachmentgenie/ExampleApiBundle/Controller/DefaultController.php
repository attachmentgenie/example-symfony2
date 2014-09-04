<?php

namespace Attachmentgenie\ExampleApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AttachmentgenieExampleApiBundle:Default:index.html.twig', array('name' => $name));
    }
}
