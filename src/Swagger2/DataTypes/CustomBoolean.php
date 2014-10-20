<?php
namespace WoohooLabs\SpecGenerator\Swagger2\DataTypes;

class CustomBoolean extends AbstractDataType
{
    /**
     * @param string $format
     */
    public function __construct($format)
    {
        parent::__construct("boolean", $format);
    }
}
