<?php
namespace WoohooLabs\SpecGenerator\Swagger2\DataTypes;

class Date extends CustomString
{
    public function __construct()
    {
        parent::__construct("date");
    }
}
