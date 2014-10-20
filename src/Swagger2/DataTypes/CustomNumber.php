<?php
namespace WoohooLabs\SpecGenerator\Swagger2\DataTypes;

class CustomNumber extends AbstractDataType
{
    /**
     * @param string $format
     */
    public function __construct($format)
    {
        parent::__construct("number", $format);
    }
}
