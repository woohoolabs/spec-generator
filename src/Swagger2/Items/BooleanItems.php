<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Items;

use WoohooLabs\SpecGenerator\Swagger2\JsonSchema\BooleanSchema;

class BooleanItems extends BooleanSchema implements ItemsInterface
{
    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct($format);
    }
}
