<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

class LongSchema extends IntegerSchema
{
    public function __construct()
    {
        parent::__construct("int64");
    }
}
