<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

class DoubleHeader extends NumberHeader
{
    /**
     * @return $this
     */
    public static function create()
    {
        return new self();
    }

    protected function __construct()
    {
        parent::__construct("double");
    }
}
