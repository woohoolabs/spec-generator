<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

class DoubleSchema extends NumberSchema
{
    public function __construct()
    {
        parent::__construct("double");
    }
}
