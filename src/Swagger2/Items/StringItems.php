<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Items;

use WoohooLabs\SpecGenerator\Swagger2\JsonSchema\StringSchema;

class StringItems extends StringSchema implements ItemsInterface
{
    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct($format);
    }
}
