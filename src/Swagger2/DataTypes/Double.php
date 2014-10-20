<?php
namespace WoohooLabs\SpecGenerator\Swagger2\DataTypes;

class Double extends CustomNumber
{
    public function __construct()
    {
        parent::__construct("double");
    }
}
