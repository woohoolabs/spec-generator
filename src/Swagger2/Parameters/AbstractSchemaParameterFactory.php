<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

use WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface;

abstract class AbstractSchemaParameterFactory extends AbstractParameterFactory
{
    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     */
    public function __construct($name, $in, $required = null)
    {
        parent::__construct($name, $in, $required);
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface $schema
     * @return \WoohooLabs\SpecGenerator\Swagger2\Parameters\SchemaParameter
     */
    public function setSchema(SchemaInterface $schema = null)
    {
        return new SchemaParameter($this->name, $this->in, $this->required, $schema);
    }
}
