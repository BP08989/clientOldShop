<?php

namespace BPashkevich\CatalogBundle\Entity;

class Image
{
    private $id;

    private $url;

    private $product;

    private $configurableProduct;

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
     * Set url.
     *
     * @param string|null $url
     *
     * @return Image
     */
    public function setUrl($url = null)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url.
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set product.
     *
     * @param \BPashkevich\ProductBundle\Entity\Product|null $product
     *
     * @return Image
     */
    public function setProduct(\BPashkevich\ProductBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product.
     *
     * @return \BPashkevich\ProductBundle\Entity\Product|null
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set configurableProduct.
     *
     * @param \BPashkevich\ProductBundle\Entity\ConfigurableProduct|null $configurableProduct
     *
     * @return Image
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
