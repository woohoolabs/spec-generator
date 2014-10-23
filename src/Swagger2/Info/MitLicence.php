<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Info;

class MitLicence extends Licence
{
    /**
     * @param string $url
     */
    public function __construct($url = null)
    {
        parent::__construct("MIT", $url);
    }
}
