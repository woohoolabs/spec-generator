<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

use WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface;
use WoohooLabs\SpecGenerator\Swagger2\Schema\ArraySchemaTrait;

class ArrayParameter extends AbstractParameter
{
    use ArraySchemaTrait;

    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     * @param \WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface $schema
     */
    public function __construct($name = null, $in = null, $required = null, ItemsInterface $schema = null)
    {
        parent::__construct($name, $in, "array", $required);
        $this->setItems($schema);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateBasicParameter(), $this->generateArraySchema());
    }
}
