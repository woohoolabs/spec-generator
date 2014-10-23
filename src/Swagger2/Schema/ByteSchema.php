<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

class ByteSchema extends StringSchema
{
    public function __construct()
    {
        parent::__construct("byte");
    }
}
