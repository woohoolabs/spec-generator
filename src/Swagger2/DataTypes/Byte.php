<?php
namespace WoohooLabs\SpecGenerator\Swagger2\DataTypes;

class Byte extends CustomString
{
    public function __construct()
    {
        parent::__construct("byte");
    }
}
