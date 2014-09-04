<?php

namespace Attachmentgenie\ExampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AttachmentgenieExampleBundle:Default:index.html.twig', array('name' => $name));
    }
}
