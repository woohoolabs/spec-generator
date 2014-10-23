<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Info;

class ApacheLicence extends Licence
{
    /**
     * @param string $url
     * @return $this
     */
    public static function create($url = "http://www.apache.org/licenses/LICENSE-2.0.html")
    {
        return new self($url);
    }

    /**
     * @param string $url
     */
    protected function __construct($url = "http://www.apache.org/licenses/LICENSE-2.0.html")
    {
        parent::__construct("Apache 2.0", $url);
    }
}
