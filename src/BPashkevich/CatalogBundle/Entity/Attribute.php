<?php

namespace BPashkevich\CatalogBundle\Entity;

class Attribute
{
    private $id;

    private $code;

    private $name;

    private $mandatory;

    private $attributeValues;

    private $configurableProducts;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->attributeValues = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set code.
     *
     * @param string $code
     *
     * @return Attribute
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Attribute
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
     * Add attributeValue.
     *
     * @param \BPashkevich\ProductBundle\Entity\AttributeValue $attributeValue
     *
     * @return Attribute
     */
    public function addAttributeValue(\BPashkevich\ProductBundle\Entity\AttributeValue $attributeValue)
    {
        $this->attributeValues[] = $attributeValue;

        return $this;
    }

    /**
     * Remove attributeValue.
     *
     * @param \BPashkevich\ProductBundle\Entity\AttributeValue $attributeValue
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAttributeValue(\BPashkevich\ProductBundle\Entity\AttributeValue $attributeValue)
    {
        return $this->attributeValues->removeElement($attributeValue);
    }

    /**
     * Get attributeValues.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAttributeValues()
    {
        return $this->attributeValues;
    }

    /**
     * Add configurableProduct.
     *
     * @param \BPashkevich\ProductBundle\Entity\ConfigurableProduct $configurableProduct
     *
     * @return Attribute
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

    /**
     * Set require.
     *
     * @param bool $require
     *
     * @return Attribute
     */
    public function setRequire($require)
    {
        $this->require = $require;

        return $this;
    }

    /**
     * Get require.
     *
     * @return bool
     */
    public function getRequire()
    {
        return $this->require;
    }

    /**
     * Set mandatory.
     *
     * @param bool $mandatory
     *
     * @return Attribute
     */
    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;

        return $this;
    }

    /**
     * Get mandatory.
     *
     * @return bool
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }
}
