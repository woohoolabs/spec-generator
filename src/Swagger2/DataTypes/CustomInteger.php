<?php
namespace WoohooLabs\SpecGenerator\Swagger2\DataTypes;

class CustomInteger extends AbstractDataType
{
    /**
     * @param string $format
     */
    public function __construct($format)
    {
        parent::__construct("integer", $format);
    }
}
