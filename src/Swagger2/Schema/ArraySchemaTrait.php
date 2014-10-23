<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

use WoohooLabs\SpecGenerator\Swagger2\CollectionFormats;
use WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface;
use WoohooLabs\SpecGenerator\Utilities\Generator;

trait ArraySchemaTrait
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
     * @return array
     */
    public function generateArraySchema()
    {
        $result= Generator::addGeneratableToArrayIfNotEmpty([], "items", $this->items);
        $result= Generator::addScalarToArrayIfNotNull($result, "collectionFormat", $this->collectionFormat);
        $result= Generator::addScalarToArrayIfNotNull($result, "maxItems", $this->maxItems);
        $result= Generator::addScalarToArrayIfNotNull($result, "minItems", $this->minItems);
        $result= Generator::addScalarToArrayIfNotNull($result, "uniqueItems", $this->uniqueItems);

        return $result;
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
     * @return $this
     */
    public function setCsvCollectionFormat()
    {
        $this->collectionFormat = CollectionFormats::CSV;

        return $this;
    }

    /**
     * @return $this
     */
    public function setSsvCollectionFormat()
    {
        $this->collectionFormat = CollectionFormats::SSV;

        return $this;
    }

    /**
     * @return $this
     */
    public function setTsvCollectionFormat()
    {
        $this->collectionFormat = CollectionFormats::TSV;

        return $this;
    }

    /**
     * @return $this
     */
    public function setPipesCollectionFormat()
    {
        $this->collectionFormat = CollectionFormats::PIPES;

        return $this;
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
     * @param integer $maxItems
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
