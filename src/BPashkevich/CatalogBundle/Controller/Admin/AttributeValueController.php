<?php

namespace BPashkevich\CatalogBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BPashkevich\CatalogBundle\Helper\Methods;

class AttributeValueController extends Controller
{
    public function indexAction(Request $request)
    {
        $attributeValues = Methods::sendRequest('http://127.0.0.1:8000/api/getALLAttributeValues');

        return $this->render('admin/attributeValue/index.html.twig', array(
            'attributeValues' => $attributeValues
        ));
    }

    public function editAction($id)
    {
        $value = Methods::sendRequest('http://127.0.0.1:8000/api/getAttributeValueById', array('id' => $id));
        $attributes = Methods::sendRequest('http://127.0.0.1:8000/api/getALLAttributes');

        return $this->render('admin/attributeValue/edit.html.twig', array(
            'attributeValue' => $value,
            'attributes' => $attributes
        ));
    }
}
