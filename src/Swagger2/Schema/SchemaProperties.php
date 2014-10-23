<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

use WoohooLabs\SpecGenerator\GeneratableInterface;

class SchemaProperties implements GeneratableInterface
{
    /**
     * @var array
     */
    private $properties= [];

    /**
     * @param array $properties
     * @return $this
     */
    public static function create(array $properties = [])
    {
        return new self($properties);
    }

    /**
     * @param array $properties
     */
    public function __construct(array $properties = [])
    {
        $this->properties= $properties;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= [];
        foreach ($this->properties as $name => $property) {
            if ($property instanceof SchemaInterface) {
                $result[$name] = $property->generate();
            }
        }

        return $result;
    }

    /**
     * @param string $name
     * @return \WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface|null
     */
    public function getProperty($name)
    {
       return isset($this->properties[$name]) ? $this->properties[$name] : null;
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param string $name
     * @param \WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface $schema
     */
    public function setProperty($name, SchemaInterface $schema)
    {
        $this->properties[$name]= $schema;
    }

    /**
     * @param array $properties
     */
    public function setProperties(array $properties)
    {
        $this->properties = $properties;
    }
}
