<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

class DateHeader extends StringHeader
{
    public function __construct()
    {
        parent::__construct("date");
    }
}
