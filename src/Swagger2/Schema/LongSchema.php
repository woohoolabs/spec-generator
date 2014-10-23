<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

class LongSchema extends IntegerSchema
{
    /**
     * @return $this
     */
    public static function create()
    {
        return new self();
    }

    public function __construct()
    {
        parent::__construct("int64");
    }
}
