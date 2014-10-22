<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;


class NumberSchema extends AbstractExtendedSchema
{
    use NumberSchemaTrait;

    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct("numer", $format);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateExtendedSchema(), $this->generateNumberSchema());
    }
}
