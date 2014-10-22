<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

use WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface;
use WoohooLabs\SpecGenerator\Swagger2\Schema\ArraySchemaTrait;

class ArrayHeader extends AbstractHeader
{
    use ArraySchemaTrait;

    /**
     * @param string $format
     * @param \WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface $items
     */
    public function __construct($format = null, ItemsInterface $items = null)
    {
        parent::__construct("array", $format);
        $this->setItems($items);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateBasicSchema(), $this->generateArraySchema());
    }
}
