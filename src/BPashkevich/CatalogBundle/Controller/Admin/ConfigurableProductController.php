<?php

namespace BPashkevich\CatalogBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BPashkevich\CatalogBundle\Helper\Methods;

class ConfigurableProductController extends Controller
{
    public function indexAction(Request $request)
    {
        $products = Methods::sendRequest('http://127.0.0.1:8000/api/getConfigProductMainInfo');

        return $this->render('admin/configurableproduct/index.html.twig', array(
            'products' => $products
        ));
    }

    public function editAction($id)
    {
        $product = Methods::sendRequest('http://127.0.0.1:8000/api/getProductById', array('id' => $id));
        $category = Methods::sendRequest('http://127.0.0.1:8000/api/getProductCategory', array('id' => $product['id']));
        $data = Methods::sendRequest('http://127.0.0.1:8000/api/getProductData', array('id' => $product['id']));
        $categories = Methods::sendRequest('http://127.0.0.1:8000/api/getCategoryShortInfo');
        $requireAttributes = Methods::sendRequest('http://127.0.0.1:8000/api/getMandatorAttributes');
        $notrequireAttributes = Methods::sendRequest('http://127.0.0.1:8000/api/getNotMandatorAttributes');

        return $this->render('/admin/configurableproduct/edit.html.twig', array(
            'product' => $product,
            'category' => $category,
            'data' => $data,
            'categories' => $categories,
            'requireAttributes' => $requireAttributes,
            'notRequireAttributes' => $notrequireAttributes,
        ));
    }

    public function saveAction(Request $request)
    {
        Methods::sendRequest('http://127.0.0.1:8000/api/setConfigurableProductById', array(
            'requestData' => $request->request->all()
        ));

        return $this->redirectToRoute('admin/configurableProduct');
    }

    public function deleteAction($id)
    {
        Methods::sendRequest('http://127.0.0.1:8000/api/deleteConfigurableProductById', array('id' => $id));

        return $this->redirectToRoute('admin/configurableProduct');
    }

    public function deleteALLAction()
    {
        Methods::sendRequest('http://127.0.0.1:8000/api/deleteALLConfigurableProducts');

        return $this->redirectToRoute('admin/configurableProduct');
    }
}
