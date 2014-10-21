<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

use WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface;
use WoohooLabs\SpecGenerator\Utilities\Generator;

class ArrayHeader extends AbstractHeader
{
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
     * @param string $format
     * @param \WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface $items
     */
    public function __construct($format = null, ItemsInterface $items = null)
    {
        parent::__construct("array", $format);
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= Generator::addItemToArrayIfNotNull([], "description", $this->getDescription());
        $result["type"] = $this->getType();
        $result= Generator::addItemToArrayIfNotNull($result, "format", $this->getFormat());
        $result= Generator::addItemToArrayIfNotNull($result, "default", $this->default);
        $result= Generator::addItemToArrayIfNotNull($result, "items", $this->items->generate());
        $result= Generator::addItemToArrayIfNotNull($result, "collectionFormat", $this->collectionFormat);
        $result= Generator::addItemToArrayIfNotNull($result, "maxItems", $this->maxItems);
        $result= Generator::addItemToArrayIfNotNull($result, "minItems", $this->minItems);
        $result= Generator::addItemToArrayIfNotNull($result, "uniqueItems", $this->uniqueItems);
        $result= Generator::addItemToArrayIfNotEmpty($result, "enum", $this->getEnum());

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
     * @param ItemsInterface $items
     * @return $this
     */
    public function setItems($items)
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
