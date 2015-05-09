<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

class LongSchema extends IntegerSchema
{
    /**
     * @param string $format
     * @return $this
     */
    public static function create($format = "int64")
    {
        return new self($format);
    }

    public function __construct()
    {
        parent::__construct("int64");
    }
}
