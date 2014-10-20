<?php
namespace WoohooLabs\SpecGenerator\Swagger2\DataTypes;

class CustomDate extends AbstractDataType
{
    /**
     * @param string $format
     */
    public function __construct($format)
    {
        parent::__construct("date", $format);
    }
}
