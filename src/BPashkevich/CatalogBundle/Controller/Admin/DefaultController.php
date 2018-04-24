<?php

namespace BPashkevich\CatalogBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BPashkevich\CatalogBundle\Helper\Methods;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

        return $this->render('admin/home.html.twig');
    }
}
