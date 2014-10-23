<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

use WoohooLabs\SpecGenerator\Swagger2\Schema\BasicSchemaTrait;

abstract class AbstractHeader implements HeaderInterface
{
    use BasicSchemaTrait;

    /**
     * @param string $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }
}
