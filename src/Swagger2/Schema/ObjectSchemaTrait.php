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
}
