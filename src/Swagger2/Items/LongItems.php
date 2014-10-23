<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Items;

class LongItems extends IntegerItems
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
