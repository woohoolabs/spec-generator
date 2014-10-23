<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Items;

use WoohooLabs\SpecGenerator\Swagger2\Schema\BasicSchemaTrait;

abstract class AbstractItems implements ItemsInterface
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
