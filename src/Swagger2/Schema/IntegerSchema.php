<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;


class IntegerSchema extends AbstractExtendedSchema
{
    use NumberSchemaTrait;

    /**
     * @param string $format
     */
    public function __construct($format = "int32")
    {
        parent::__construct("integer");
        $this->setFormat($format);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateExtendedSchema(), $this->generateNumberSchema());
    }
}
