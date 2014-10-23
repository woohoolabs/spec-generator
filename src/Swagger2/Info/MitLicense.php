<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Info;

class MitLicense extends License
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
    public function __construct($url = null)
    {
        parent::__construct("MIT", $url);
    }
}
