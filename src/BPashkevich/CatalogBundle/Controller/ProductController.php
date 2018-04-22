<?php

namespace BPashkevich\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Product controller.
 *
 */
class ProductController extends Controller
{
    private $productService;

    private $categoryService;

    private $attributeService;

    private $attributeValueService;

    private $imageService;

    private $configurableProductService;

    public function __construct()
    {
    }


    public function indexAction()
    {
    }

    public function newAction(Request $request, ConfigurableProduct $configurableProduct = null)
    {
    }

    public function saveAction(Request $request, ConfigurableProduct $configurableProduct = null)
    {
    }

    public function newProductFromConfigurableAction()
    {
    }

    public function showAction(Product $product)
    {
    }

    public function editAction(Request $request, Product $product)
    {
    }

    public function deleteAction(Request $request, Product $product)
    {
    }

    private function createDeleteForm(Product $product)
    {
    }
}
