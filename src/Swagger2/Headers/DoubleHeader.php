<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

class DoubleHeader extends NumberHeader
{
    public function __construct()
    {
        parent::__construct("double");
    }
}
