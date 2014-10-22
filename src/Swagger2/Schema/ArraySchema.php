<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;


class ArraySchema extends AbstractExtendedSchema
{
    use ArraySchemaTrait;

    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct("array", $format);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateExtendedSchema(), $this->generateArraySchema());
    }
}
