<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;


class BooleanSchema extends AbstractExtendedSchema
{
    use BooleanSchemaTrait;

    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct("boolean");
        $this->setFormat($format);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateExtendedSchema(), $this->generateBooleanSchema());
    }
}
