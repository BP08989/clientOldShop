<?php

namespace BPashkevich\CatalogBundle\Entity;

class Product
{
    private $id;

    private $category;

    private $images;

    private $productOrders;

    private $configurableProduct;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productOrders = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set category.
     *
     * @param \BPashkevich\ProductBundle\Entity\Category|null $category
     *
     * @return Product
     */
    public function setCategory(\BPashkevich\ProductBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \BPashkevich\ProductBundle\Entity\Category|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add image.
     *
     * @param \BPashkevich\ProductBundle\Entity\Image $image
     *
     * @return Product
     */
    public function addImage(\BPashkevich\ProductBundle\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image.
     *
     * @param \BPashkevich\ProductBundle\Entity\Image $image
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeImage(\BPashkevich\ProductBundle\Entity\Image $image)
    {
        return $this->images->removeElement($image);
    }

    /**
     * Get images.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add productOrder.
     *
     * @param \BPashkevich\ProductBundle\Entity\ProductOrder $productOrder
     *
     * @return Product
     */
    public function addProductOrder(\BPashkevich\ProductBundle\Entity\ProductOrder $productOrder)
    {
        $this->productOrders[] = $productOrder;

        return $this;
    }

    /**
     * Remove productOrder.
     *
     * @param \BPashkevich\ProductBundle\Entity\ProductOrder $productOrder
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeProductOrder(\BPashkevich\ProductBundle\Entity\ProductOrder $productOrder)
    {
        return $this->productOrders->removeElement($productOrder);
    }

    /**
     * Get productOrders.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductOrders()
    {
        return $this->productOrders;
    }

    /**
     * Set configurableProduct.
     *
     * @param \BPashkevich\ProductBundle\Entity\ConfigurableProduct|null $configurableProduct
     *
     * @return Product
     */
    public function setConfigurableProduct(\BPashkevich\ProductBundle\Entity\ConfigurableProduct $configurableProduct = null)
    {
        $this->configurableProduct = $configurableProduct;

        return $this;
    }

    /**
     * Get configurableProduct.
     *
     * @return \BPashkevich\ProductBundle\Entity\ConfigurableProduct|null
     */
    public function getConfigurableProduct()
    {
        return $this->configurableProduct;
    }
}
