<?php
namespace WoohooLabs\SpecGenerator\Swagger2\DataTypes;

class Integer extends CustomInteger
{
    public function __construct()
    {
        parent::__construct("int32");
    }
}
