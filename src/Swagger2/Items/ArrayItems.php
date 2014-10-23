<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Items;

use WoohooLabs\SpecGenerator\Swagger2\Schema\ArraySchemaTrait;

class ArrayItems extends AbstractItems
{
    use ArraySchemaTrait;

    /**
     * @param string $title
     * @param string $version
     * @return $this
     */
    public static function create($title = null, $version = null)
    {
        return new self($title, $version);
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
