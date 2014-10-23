<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

class LongHeader extends IntegerHeader
{
    public function __construct()
    {
        parent::__construct("long");
    }
}
