<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

class ObjectSchema extends AbstractExtendedSchema
{
    use ObjectSchemaTrait;

    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct("object", $format);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateExtendedSchema(), $this->generateObjectSchema());
    }
}
