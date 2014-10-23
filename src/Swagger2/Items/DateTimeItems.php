<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Items;

class DateTimeItems extends StringItems
{
    public function __construct()
    {
        parent::__construct("date-time");
    }
}
