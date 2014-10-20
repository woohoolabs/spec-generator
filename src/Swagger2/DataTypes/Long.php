<?php
namespace WoohooLabs\SpecGenerator\Swagger2\DataTypes;

class Long extends CustomInteger
{
    public function __construct()
    {
        parent::__construct("int64");
    }
}
