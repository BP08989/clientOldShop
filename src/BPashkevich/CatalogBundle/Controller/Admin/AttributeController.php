<?php

namespace BPashkevich\CatalogBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BPashkevich\CatalogBundle\Helper\Methods;

class AttributeController extends Controller
{
    public function indexAction(Request $request)
    {
        $attributes = Methods::sendRequest('http://127.0.0.1:8000/api/getALLAttributes');

        return $this->render('admin/attribute/index.html.twig', array(
            'attributes' => $attributes
        ));
    }

    public function editAction($id)
    {
        $attribute = Methods::sendRequest('http://127.0.0.1:8000/api/getAttributeById', array('id' => $id));

        return $this->render('admin/attribute/edit.html.twig', array(
            'attribute' => $attribute
        ));
    }
}
