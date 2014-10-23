<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

class FloatSchema extends NumberSchema
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
        parent::__construct("float");
    }
}
