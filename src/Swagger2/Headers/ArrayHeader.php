<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

use WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface;
use WoohooLabs\SpecGenerator\Swagger2\Schema\ArraySchemaTrait;

class ArrayHeader extends AbstractHeader
{
    use ArraySchemaTrait;

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface $items
     * @return $this
     */
    public static function create(ItemsInterface $items = null)
    {
        return new self($items);
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface $items
     */
    public function __construct(ItemsInterface $items = null)
    {
        parent::__construct("array");
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
