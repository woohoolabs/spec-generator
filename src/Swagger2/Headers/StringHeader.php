<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

use WoohooLabs\SpecGenerator\Swagger2\JsonSchema\StringSchema;

class StringHeader extends StringSchema implements HeaderInterface
{
    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct($format);
    }
}
