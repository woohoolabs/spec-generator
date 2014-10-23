<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

class DateSchema extends StringSchema
{
    public function __construct()
    {
        parent::__construct("date");
    }
}
