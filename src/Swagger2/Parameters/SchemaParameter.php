<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

use WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface;

class SchemaParameter extends AbstractParameter
{
    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface
     */
    private $schema;

    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     * @param \WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface $schema
     */
    public function __construct($name = null, $in = null, $required = null, SchemaInterface $schema = null)
    {
        parent::__construct($name, $in, "object", $required);
        $this->schema= $schema;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $objectSchema= $this->schema !== null ? $this->schema->generate() : [];

        return array_merge($this->generateBasicParameter(), $objectSchema);
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface $schema
     * @return $this
     */
    public function setSchema(SchemaInterface $schema)
    {
        $this->schema = $schema;

        return $this;
    }
}
