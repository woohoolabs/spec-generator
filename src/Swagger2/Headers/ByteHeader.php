<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

class ByteHeader extends StringHeader
{
    public function __construct()
    {
        parent::__construct("byte");
    }
}
