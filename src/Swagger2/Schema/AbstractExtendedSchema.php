<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

use WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs;
use WoohooLabs\SpecGenerator\Swagger2\Refs\SchemaRef;
use WoohooLabs\SpecGenerator\Utilities\Generator;

abstract class AbstractExtendedSchema implements SchemaInterface
{
    use BasicSchemaTrait;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Refs\SchemaRef
     */
    private $ref;

    /**
     * @var string
     */
    private $title;

    /**
     * @var array
     */
    private $allOf= [];

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs
     */
    private $externalDocs;

    /**
     * @var array
     */
    private $example= [];

    /**
     * @param string|array $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * @return array
     */
    public function generateExtendedSchema()
    {
        $result= Generator::mergeGeneratableToArrayIfNotEmpty([], $this->ref);
        $result["type"] = $this->type;
        $result= Generator::addItemToArrayIfNotEmpty($result, "title", $this->title);
        $result= Generator::addItemToArrayIfNotEmpty($result, "description", $this->getDescription());
        $result= Generator::addItemToArrayIfNotEmpty($result, "default", $this->getDefault());
        $result= Generator::addItemToArrayIfNotEmpty($result, "enum", $this->getEnum());
        $result= Generator::addItemToArrayIfNotEmpty($result, "allOf", $this->allOf);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "externalDocs", $this->externalDocs);
        $result= Generator::addItemToArrayIfNotEmpty($result, "example", $this->example);

        return $result;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Refs\SchemaRef
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Refs\SchemaRef $ref
     * @return $this
     */
    public function setRef(SchemaRef $ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return array
     */
    public function getAllOf()
    {
        return $this->allOf;
    }

    /**
     * @param array $allOf
     * @return $this
     */
    public function setAllOf($allOf)
    {
        $this->allOf = $allOf;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs
     */
    public function getExternalDocs()
    {
        return $this->externalDocs;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs $externalDocs
     * @return $this
     */
    public function setExternalDocs(ExternalDocs $externalDocs)
    {
        $this->externalDocs = $externalDocs;

        return $this;
    }

    /**
     * @return array
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * @param array $example
     * @return $this
     */
    public function setExample(array $example)
    {
        $this->example = $example;

        return $this;
    }
}
