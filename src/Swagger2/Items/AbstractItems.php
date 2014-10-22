<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Items;

use WoohooLabs\SpecGenerator\Swagger2\Schema\BasicSchemaTrait;

abstract class AbstractItems implements ItemsInterface
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
