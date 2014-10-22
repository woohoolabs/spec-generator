<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;


class StringSchema extends AbstractExtendedSchema
{
    use StringSchemaTrait;

    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct("string", $format);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateExtendedSchema(), $this->generateStringSchema());
    }
}
