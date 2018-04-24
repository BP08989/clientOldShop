<?php

namespace BPashkevich\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BPashkevich\CatalogBundle\Helper\Methods;

class CartController extends Controller
{
    public function indexAction(Request $request)
    {
        $products = array();
        if(empty($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }
        foreach ($_SESSION['cart'] as $item) {
            $products[] = Methods::sendRequest('http://127.0.0.1:8000/api/getProductById', array('id' => $item));
        }

        $categories = Methods::sendRequest('http://127.0.0.1:8000/api/getCategoryShortInfo');
        $totalCost = 0;
        foreach ($products as $product) {
            $totalCost += $product['price'];
        }

        return $this->render('cart/index.html.twig', array(
            'categories' => $categories,
            'products' => $products,
            'totalCost' => $totalCost,
        ));
    }

    public function addAction($id)
    {
        if(empty($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }

        array_push($_SESSION['cart'], $id);

        return $this->redirectToRoute('b_pashkevich_catalog_product_show', array('id' => $id));
    }

    public function removeAction($id)
    {
        if (($key = array_search($id, $_SESSION['cart'])) !== false) {
            unset($_SESSION['cart'][$key]);
        }

        return $this->redirectToRoute('b_pashkevich_catalog_product_show', array('id' => $id));
    }

    public function clearAction()
    {
        $_SESSION['cart'] = array();

        return $this->redirectToRoute('b_pashkevich_catalog_cart_show');
    }
}
