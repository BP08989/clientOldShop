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

    public function editAction($id)
    {
        $product = Methods::sendRequest('http://127.0.0.1:8000/api/getProductById', array('id' => $id));
        $category = Methods::sendRequest('http://127.0.0.1:8000/api/getProductCategory', array('id' => $product['id']));
        $data = Methods::sendRequest('http://127.0.0.1:8000/api/getProductData', array('id' => $product['id']));
        $categories = Methods::sendRequest('http://127.0.0.1:8000/api/getCategoryShortInfo');

        return $this->render('/admin/product/edit.html.twig', array(
            'product' => $product,
            'category' => $category,
            'data' => $data,
            'categories' => $categories
        ));
    }
}
