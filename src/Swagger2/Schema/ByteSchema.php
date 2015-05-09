<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

class ByteSchema extends StringSchema
{
    /**
     * @param string $format
     * @return $this
     */
    public static function create($format = "byte")
    {
        return new self($format);
    }

    public function __construct()
    {
        parent::__construct("byte");
    }
}
