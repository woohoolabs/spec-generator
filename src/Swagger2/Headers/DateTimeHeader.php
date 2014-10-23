<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

class DateTimeHeader extends StringHeader
{
    public function __construct()
    {
        parent::__construct("date-time");
    }
}
