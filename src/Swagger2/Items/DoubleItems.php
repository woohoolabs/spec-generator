<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Items;

class DoubleItems extends NumberItems
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
        parent::__construct("double");
    }
}
