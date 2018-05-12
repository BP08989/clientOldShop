<?php

namespace BPashkevich\CatalogBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BPashkevich\CatalogBundle\Helper\Methods;

class CategoryController extends Controller
{
    public function indexAction()
    {
        $categories = Methods::sendRequest('http://127.0.0.1:8000/api/getCategoryShortInfo');

        return $this->render('/admin/category/index.html.twig', array(
            'categories' => $categories,
        ));
    }

    public function editAction($id)
    {
        $category = Methods::sendRequest('http://127.0.0.1:8000/api/getCategoryShortInfo', array('id' => $id))[0];

        return $this->render('/admin/category/edit.html.twig', array(
            'category' => $category,
        ));
    }

    public function saveAction($id = null, $name = null)
    {
        $category = Methods::sendRequest('http://127.0.0.1:8000/api/setCategoryById', array(
            'id' => $id,
            'name' => $name,
        ));

        return $this->render('admin/category/edit.html.twig', array(
            'category' => $category
        ));
    }

    public function deleteAction($id)
    {
        Methods::sendRequest('http://127.0.0.1:8000/api/deleteCategoryById', array('id' => $id));

        return $this->redirectToRoute('admin/category');
    }

    public function deleteALLAction()
    {
        Methods::sendRequest('http://127.0.0.1:8000/api/deleteALLCategories');

        return $this->redirectToRoute('admin/category');
    }
}
