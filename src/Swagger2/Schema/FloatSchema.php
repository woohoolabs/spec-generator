<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

class FloatSchema extends NumberSchema
{
    /**
     * @param string $format
     * @return $this
     */
    public static function create($format = "float")
    {
        return new self($format);
    }

    public function __construct()
    {
        parent::__construct("float");
    }
}
