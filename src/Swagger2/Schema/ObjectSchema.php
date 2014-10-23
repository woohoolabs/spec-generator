<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

class ObjectSchema extends AbstractExtendedSchema
{
    use ObjectSchemaTrait;

    /**
     * @return $this
     */
    public static function create()
    {
        return new self();
    }

    public function __construct()
    {
        parent::__construct("object");
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateExtendedSchema(), $this->generateObjectSchema());
    }
}
