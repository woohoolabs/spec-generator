<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Definitions;

use WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface;

class Definitions implements DefinitionsInterface
{
    /**
     * @var array
     */
    private $schemas= [];

    /**
     * @param array $schemas
     * @return $this
     */
    public static function create(array $schemas = [])
    {
        return new self($schemas);
    }

    /**
     * @param array $schemas
     */
    public function __construct(array $schemas = [])
    {
        $this->schemas = $schemas;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= [];

        foreach ($this->schemas as $name => $schema) {
            if ($schema instanceof SchemaInterface) {
                $result[$name] = $schema->generate();
            }
        }

        return $result;
    }

    /**
     * @param string $name
     * @return \WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface|null
     */
    public function getSchema($name)
    {
        return isset($this->schemas[$name]) ? $this->schemas[$name] : null;
    }

    /**
     * @return array
     */
    public function getSchemas()
    {
        return $this->schemas;
    }

    /**
     * @param string $name
     * @param \WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface $schema
     * @return $this
     */
    public function setSchema($name, SchemaInterface $schema)
    {
        $this->schemas[$name] = $schema;

        return $this;
    }

    /**
     * @param array $schemas
     * @return $this
     */
    public function setSchemas(array $schemas)
    {
        $this->schemas = $schemas;

        return $this;
    }
}
