<?php

namespace BPashkevich\CatalogBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BPashkevich\CatalogBundle\Helper\Methods;

class UserController extends Controller
{
    public function indexAction(Request $request)
    {
        $users = Methods::sendRequest('http://127.0.0.1:8000/api/getALLUsers');

        return $this->render('admin/user/index.html.twig', array(
            'users' => $users
        ));
    }

    public function editAction($id)
    {
        $user = Methods::sendRequest('http://127.0.0.1:8000/api/getUserById', array('id' => $id));

        return $this->render('admin/user/edit.html.twig', array(
            'user' => $user
        ));
    }

    public function saveAction($id = null, $name = null, $email = null, $number = null, $password = null, $role = null)
    {
        $attribute = Methods::sendRequest('http://127.0.0.1:8000/api/setUserById', array(
            'id' => $id,
            'name' => $name,
            'password' => $password,
            'role' => $role,
        ));

        $user = Methods::sendRequest('http://127.0.0.1:8000/api/getUserById', array('id' => $id));

        return $this->render('admin/user/edit.html.twig', array(
            'user' => $user
        ));
    }

    public function deleteAction($id)
    {
        Methods::sendRequest('http://127.0.0.1:8000/api/deleteUserById', array('id' => $id));

        return $this->redirectToRoute('admin/user');
    }

    public function deleteALLAction()
    {
        Methods::sendRequest('http://127.0.0.1:8000/api/deleteALLUsers');

        return $this->redirectToRoute('admin/user');
    }
}
