<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

class HeaderParameter extends AbstractSimpleParameterFactory
{
    /**
     * @param string $name
     */
    public function __construct($name = null)
    {
        parent::__construct($name, "header");
    }
}
