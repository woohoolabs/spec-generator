<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

use WoohooLabs\SpecGenerator\Swagger2\Schema\BasicSchemaTrait;

abstract class AbstractHeader implements HeaderInterface
{
    use BasicSchemaTrait;

    /**
     * @param string $type
     * @param string $format
     */
    public function __construct($type, $format = null)
    {
        $this->type = $type;
        $this->format = $format;
    }
}
