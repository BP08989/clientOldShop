<?php

namespace BPashkevich\CatalogBundle\Entity;

class Category
{
    private $id;

    private $name;

    private $products;

    private $configurableProducts;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
        $this->configurableProducts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add product.
     *
     * @param \BPashkevich\ProductBundle\Entity\Product $product
     *
     * @return Category
     */
    public function addProduct(\BPashkevich\ProductBundle\Entity\Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product.
     *
     * @param \BPashkevich\ProductBundle\Entity\Product $product
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeProduct(\BPashkevich\ProductBundle\Entity\Product $product)
    {
        return $this->products->removeElement($product);
    }

    /**
     * Get products.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Add configurableProduct.
     *
     * @param \BPashkevich\ProductBundle\Entity\ConfigurableProduct $configurableProduct
     *
     * @return Category
     */
    public function addConfigurableProduct(\BPashkevich\ProductBundle\Entity\ConfigurableProduct $configurableProduct)
    {
        $this->configurableProducts[] = $configurableProduct;

        return $this;
    }

    /**
     * Remove configurableProduct.
     *
     * @param \BPashkevich\ProductBundle\Entity\ConfigurableProduct $configurableProduct
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeConfigurableProduct(\BPashkevich\ProductBundle\Entity\ConfigurableProduct $configurableProduct)
    {
        return $this->configurableProducts->removeElement($configurableProduct);
    }

    /**
     * Get configurableProducts.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConfigurableProducts()
    {
        return $this->configurableProducts;
    }
}
