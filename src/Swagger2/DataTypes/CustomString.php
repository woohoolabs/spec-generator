<?php
namespace WoohooLabs\SpecGenerator\Swagger2\DataTypes;

class CustomString extends AbstractDataType
{
    /**
     * @param string $format
     */
    public function __construct($format)
    {
        parent::__construct("string", $format);
    }
}
