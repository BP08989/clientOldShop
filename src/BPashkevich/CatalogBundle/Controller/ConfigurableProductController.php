<?php

namespace BPashkevich\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Configurableproduct controller.
 *
 */
class ConfigurableProductController extends Controller
{
    private $configurableProductService;

    private $categoryService;

    private $attributeService;

    private $attributeValueService;

    private $imageService;

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

    public function showAction(ConfigurableProduct $configurableProduct)
    {
    }

    public function updateAction(Request $request, ConfigurableProduct $configurableProduct)
    {
    }

    public function editAction(Request $request, ConfigurableProduct $configurableProduct)
    {
    }

    public function deleteAction(Request $request, ConfigurableProduct $configurableProduct)
    {
    }

    private function createDeleteForm(ConfigurableProduct $configurableProduct)
    {
    }
}
