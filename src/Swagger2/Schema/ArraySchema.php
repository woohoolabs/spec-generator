<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

use WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface;

class ArraySchema extends AbstractExtendedSchema
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
        return array_merge($this->generateExtendedSchema(), $this->generateArraySchema());
    }
}
