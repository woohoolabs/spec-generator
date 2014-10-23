<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

class DateTimeSchema extends StringSchema
{
    public function __construct()
    {
        parent::__construct("date-time");
    }
}
