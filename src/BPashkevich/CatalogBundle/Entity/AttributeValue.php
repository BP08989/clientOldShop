<?php

namespace BPashkevich\CatalogBundle\Entity;

class AttributeValue
{
    private $id;

    private $value;

    private $attribute;


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
     * Set value.
     *
     * @param string $value
     *
     * @return AttributeValue
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set attribute.
     *
     * @param \BPashkevich\ProductBundle\Entity\Attribute|null $attribute
     *
     * @return AttributeValue
     */
    public function setAttribute(\BPashkevich\ProductBundle\Entity\Attribute $attribute = null)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * Get attribute.
     *
     * @return \BPashkevich\ProductBundle\Entity\Attribute|null
     */
    public function getAttribute()
    {
        return $this->attribute;
    }
}
