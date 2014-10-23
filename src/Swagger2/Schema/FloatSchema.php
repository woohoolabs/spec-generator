<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

class FloatSchema extends NumberSchema
{
    public function __construct()
    {
        parent::__construct("float");
    }
}
