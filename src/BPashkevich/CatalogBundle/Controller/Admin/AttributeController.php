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

    public function saveAction($id = null, $name = null, $code = null, $mandatory = null)
    {
        $attribute = Methods::sendRequest('http://127.0.0.1:8000/api/setAttributeById', array(
            'id' => $id,
            'name' => $name,
            'code' => $code,
            'mandatory' => $mandatory,
        ));

        return $this->render('admin/attribute/edit.html.twig', array(
            'attribute' => $attribute
        ));
    }

    public function deleteAction($id)
    {
        Methods::sendRequest('http://127.0.0.1:8000/api/deleteAttributeById', array('id' => $id));

        return $this->redirectToRoute('admin/attribute');
    }

    public function deleteALLAction()
    {
        Methods::sendRequest('http://127.0.0.1:8000/api/deleteALLAttributes');

        return $this->redirectToRoute('admin/attribute');
    }
}
