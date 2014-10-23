<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Items;

class LongItems extends IntegerItems
{
    public function __construct()
    {
        parent::__construct("int64");
    }
}
