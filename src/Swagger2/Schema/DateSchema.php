<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

class DateSchema extends StringSchema
{
    /**
     * @param string $format
     * @return $this
     */
    public static function create($format = "date")
    {
        return new self($format);
    }

    public function __construct()
    {
        parent::__construct("date");
    }
}
