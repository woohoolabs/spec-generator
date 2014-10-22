<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

use WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface;
use WoohooLabs\SpecGenerator\Utilities\Generator;

trait ArraySchemaTrait
{
    /**
     * @var array
     */
    protected $default;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface
     */
    private $items;

    /**
     * @var string
     */
    private $collectionFormat;

    /**
     * @var integer
     */
    private $maxItems;

    /**
     * @var integer
     */
    private $minItems;

    /**
     * @var boolean
     */
    private $uniqueItems;

    /**
     * @return array
     */
    public function generateArraySchema()
    {
        $result= Generator::addScalarToArrayIfNotNull([], "items", $this->items->generate());
        $result= Generator::addScalarToArrayIfNotNull($result, "collectionFormat", $this->collectionFormat);
        $result= Generator::addScalarToArrayIfNotNull($result, "maxItems", $this->maxItems);
        $result= Generator::addScalarToArrayIfNotNull($result, "minItems", $this->minItems);
        $result= Generator::addScalarToArrayIfNotNull($result, "uniqueItems", $this->uniqueItems);

        return $result;
    }

    /**
     * @return array
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param array $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface $items
     * @return $this
     */
    public function setItems(ItemsInterface $items = null)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return string
     */
    public function getCollectionFormat()
    {
        return $this->collectionFormat;
    }

    /**
     * @param string $collectionFormat
     * @return $this
     */
    public function setCollectionFormat($collectionFormat)
    {
        $this->collectionFormat = $collectionFormat;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaxItems()
    {
        return $this->maxItems;
    }

    /**
     * @param int $maxItems
     * @return $this
     */
    public function setMaxItems($maxItems)
    {
        $this->maxItems = $maxItems;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMinItems()
    {
        return $this->minItems;
    }

    /**
     * @param integer $minItems
     * @return $this
     */
    public function setMinItems($minItems)
    {
        $this->minItems = $minItems;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isUniqueItems()
    {
        return $this->uniqueItems;
    }

    /**
     * @param boolean $uniqueItems
     * @return $this
     */
    public function setUniqueItems($uniqueItems)
    {
        $this->uniqueItems = $uniqueItems;

        return $this;

    }
}
