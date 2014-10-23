<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

class FloatHeader extends NumberHeader
{
    public function __construct()
    {
        parent::__construct("float");
    }
}
