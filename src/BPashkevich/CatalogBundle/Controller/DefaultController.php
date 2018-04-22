<?php

namespace BPashkevich\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BPashkevich\CatalogBundle\Helper\Methods;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        if(empty($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }

        $categories = Methods::sendRequest('http://127.0.0.1:8000/api/getCategoryShortInfo');
        $products = Methods::sendRequest('http://127.0.0.1:8000/api/getSingleProductMainInfo');
        $isProductInCart = array();
        foreach ($products as $product) {
            $isProductInCart[$product['id']] = array_search($product['id'], $_SESSION['cart']);
        }
        $cProducts = Methods::sendRequest('http://127.0.0.1:8000/api/getConfigProductMainInfo');

        return $this->render('default/home.html.twig', array(
            'categories' => $categories,
            'products' => $products,
            'configurableProducts' => $cProducts,
            'isProductInCart' => $isProductInCart,
        ));
    }
}
