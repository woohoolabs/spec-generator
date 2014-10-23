<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

class PathParameter extends AbstractSimpleParameterFactory
{
    /**
     * @param string $name
     * @return $this
     */
    public static function create($name = null)
    {
        return new self($name);
    }

    /**
     * @param string $name
     */
    public function __construct($name = null)
    {
        parent::__construct($name, "path", true);
    }
}
