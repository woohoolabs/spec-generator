<?php
namespace WoohooLabs\SpecGenerator\Swagger2\DataTypes;

class Float extends CustomNumber
{
    public function __construct()
    {
        parent::__construct("float");
    }
}
