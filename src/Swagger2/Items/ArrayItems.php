<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Items;

use WoohooLabs\SpecGenerator\Swagger2\Schema\ArraySchemaTrait;

class AbstractArrayItems extends AbstractItems
{
    use ArraySchemaTrait;

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
