<?php

namespace BPashkevich\CatalogBundle\Controller;

use BPashkevich\CatalogBundle\Helper\Methods;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ConfigurableProductController extends Controller
{
    public function __construct()
    {
    }

    public function indexAction()
    {
    }

    public function newAction(Request $request)
    {
    }

    public function saveAction(Request $request)
    {
    }

    public function showAction($id)
    {
        $dataForShow = Methods::sendRequest('http://127.0.0.1:8000/api/getConfigurableProductForShow', array('id' => $id));
        $product = Methods::sendRequest('http://127.0.0.1:8000/api/getConfigProductMainInfo', array('id' => $id))[0];
        $categories = Methods::sendRequest('http://127.0.0.1:8000/api/getCategoryShortInfo');

        return $this->render('configurableproduct/show.html.twig', array(
            'product' => $product,
            'data' => $dataForShow['info'],
            'categoryName' => $dataForShow['categoryName'],
            'options' => $dataForShow['options'],
            'categories' => $categories,
        ));
    }

    public function updateAction(Request $request)
    {
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
