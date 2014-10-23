<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Info;

class MitLicence extends Licence
{
    /**
     * @param string $url
     * @return $this
     */
    public static function create($url = null)
    {
        return new self($url);
    }

    /**
     * @param string $url
     */
    protected function __construct($url = null)
    {
        parent::__construct("MIT", $url);
    }
}
