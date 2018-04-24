<?php

namespace BPashkevich\CatalogBundle\Controller;

use BPashkevich\CatalogBundle\Helper\Methods;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Product controller.
 *
 */
class ProductController extends Controller
{
    public function indexAction()
    {
    }

    public function newAction(Request $request)
    {
    }

    public function saveAction(Request $request)
    {
    }

    public function newProductFromConfigurableAction()
    {
    }

    public function showAction($id)
    {
        $categories = Methods::sendRequest('http://127.0.0.1:8000/api/getCategoryShortInfo');
        $product = Methods::sendRequest('http://127.0.0.1:8000/api/getProductById', array('id' => $id));
        $category = Methods::sendRequest('http://127.0.0.1:8000/api/getProductCategory', array('id' => $product['id']));
        $data = Methods::sendRequest('http://127.0.0.1:8000/api/getProductData', array('id' => $product['id']));

        return $this->render('product/show.html.twig', array(
            'data' => $data,
            'product' => $product,
            'categoryName' => $category,
            'categories' => $categories,
            'isConsist' => in_array($product['id'], $_SESSION['cart']),
        ));
    }

    public function editAction(Request $request)
    {
    }

    public function deleteAction(Request $request)
    {
    }

    private function createDeleteForm()
    {
    }
}
