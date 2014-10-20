<?php
namespace WoohooLabs\SpecGenerator\Swagger2\DataTypes;

class DateTime extends CustomString
{
    public function __construct()
    {
        parent::__construct("date-time");
    }
}
