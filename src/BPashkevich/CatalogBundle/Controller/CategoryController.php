<?php

namespace BPashkevich\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BPashkevich\CatalogBundle\Helper\Methods;

class CategoryController extends Controller
{
    public function indexAction()
    {
        $categories = Methods::sendRequest('http://127.0.0.1:8000/api/getCategoryShortInfo');

        return $this->render('category/index.html.twig', array(
            'categories' => $categories,
        ));
    }

    public function showAction($id)
    {
        if(empty($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }

        $categories = Methods::sendRequest('http://127.0.0.1:8000/api/getCategoryShortInfo');
        $category = Methods::sendRequest('http://127.0.0.1:8000/api/getCategoryShortInfo', array('id' => $id))[0];
        $products = Methods::sendRequest('http://127.0.0.1:8000/api/getSimpleProductsFromCategoryMainInfoAction', array('id' => $id));
        $cProducts = Methods::sendRequest('http://127.0.0.1:8000/api/getConfigProductFromCategoryMainInfo', array('id' => $id));
        $isProductInCart = array();
        foreach ($products as $product) {
            $isProductInCart[$product['id']] = array_search($product['id'], $_SESSION['cart']);
        }

        return $this->render('category/show.html.twig', array(
            'categories' => $categories,
            'category' => $category,
            'products' => $products,
            'configurableProducts' => $cProducts,
            'isProductInCart' => $isProductInCart,
        ));
    }

}
