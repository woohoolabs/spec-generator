<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;


class ArraySchema extends AbstractExtendedSchema
{
    use ArraySchemaTrait;

    public function __construct()
    {
        parent::__construct("array");
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateExtendedSchema(), $this->generateArraySchema());
    }
}
