<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

use WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface;
use WoohooLabs\SpecGenerator\Swagger2\JsonSchema\ArraySchema;

class ArrayHeader extends ArraySchema implements HeaderInterface
{
    /**
     * @param string $format
     * @param \WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface $items
     */
    public function __construct($format = null, ItemsInterface $items = null)
    {
        parent::__construct($format, $items);
    }
}
