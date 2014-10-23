<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

class BodyParameter extends AbstractSchemaParameterFactory
{
    /**
     * @param string $name
     */
    public function __construct($name = null)
    {
        parent::__construct($name, "body");
    }
}
