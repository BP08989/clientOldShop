<?php

namespace BPashkevich\CatalogBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BPashkevich\CatalogBundle\Helper\Methods;

class ProductController extends Controller
{
    public function indexAction(Request $request)
    {
        $products = Methods::sendRequest('http://127.0.0.1:8000/api/getALLProducts');
        return $this->render('admin/product/index.html.twig', array(
            'products' => $products
        ));
    }
}
