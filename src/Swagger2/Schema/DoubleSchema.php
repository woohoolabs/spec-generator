<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

class DoubleSchema extends NumberSchema
{
    /**
     * @param string $format
     * @return $this
     */
    public static function create($format = "double")
    {
        return new self($format);
    }

    public function __construct()
    {
        parent::__construct("double");
    }
}
