<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;


class IntegerSchema extends AbstractExtendedSchema
{
    use NumberSchemaTrait;

    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct("integer", $format);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateExtendedSchema(), $this->generateNumberSchema());
    }
}
