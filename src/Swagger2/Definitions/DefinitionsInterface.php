<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Definitions;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface DefinitionsInterface extends GeneratableInterface
{
    /**
     * @param string $name
     * @return \WoohooLabs\SpecGenerator\Swagger2\DataTypes\SchemaInterface|null
     */
    public function getSchema($name);

    /**
     * @return array
     */
    public function getSchemas();
}
