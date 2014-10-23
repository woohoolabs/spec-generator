<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

class DateTimeHeader extends StringHeader
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
        parent::__construct("date-time");
    }
}
