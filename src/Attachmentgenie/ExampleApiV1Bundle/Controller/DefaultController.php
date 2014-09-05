<?php

namespace Attachmentgenie\ExampleApiV1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AttachmentgenieExampleApiV1Bundle:Default:index.html.twig', array('name' => $name));
    }
}
