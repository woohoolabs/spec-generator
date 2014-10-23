<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Items;

class ByteItems extends StringItems
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
        parent::__construct("byte");
    }
}
