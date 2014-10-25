<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

use WoohooLabs\SpecGenerator\Utilities\Generator;

trait ObjectSchemaTrait
{
    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaProperties
     */
    private $properties;

    /**
     * @var integer
     */
    private $maxProperties;

    /**
     * @var integer
     */
    private $minProperties;

    /**
     * @var array
     */
    private $required= [];

    /**
     * @var string
     */
    private $discriminator;

    /**
     * @return array
     */
    public function generateObjectSchema()
    {
        $result= Generator::addGeneratableToArrayIfNotEmpty([], "properties", $this->properties);
        $result= Generator::addItemToArrayIfNotEmpty($result, "maxProperties", $this->maxProperties);
        $result= Generator::addItemToArrayIfNotEmpty($result, "minProperties", $this->minProperties);
        $result= Generator::addItemToArrayIfNotEmpty($result, "required", $this->required);
        $result= Generator::addItemToArrayIfNotEmpty($result, "discriminator", $this->discriminator);

        return $result;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaProperties
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaProperties $properties
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaxProperties()
    {
        return $this->maxProperties;
    }

    /**
     * @param integer $maxProperties
     * @return $this
     */
    public function setMaxProperties($maxProperties)
    {
        $this->maxProperties = $maxProperties;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMinProperties()
    {
        return $this->minProperties;
    }

    /**
     * @param integer $minProperties
     * @return $this
     */
    public function setMinProperties($minProperties)
    {
        $this->minProperties = $minProperties;

        return $this;
    }

    /**
     * @return array
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param array $required
     * @return $this
     */
    public function setRequired(array $required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * @param string $property
     * @return $this
     */
    public function addRequiredProperty($property)
    {
        $this->required[] = $property;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscriminator()
    {
        return $this->discriminator;
    }

    /**
     * @param string $discriminator
     * @return $this
     */
    public function setDiscriminator($discriminator)
    {
        $this->discriminator = $discriminator;

        return $this;
    }
}
