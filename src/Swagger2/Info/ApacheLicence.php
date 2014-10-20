<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Info;

class ApacheLicence extends Licence
{
    /**
     * @param string|null $url
     */
    public function __construct($url = "http://www.apache.org/licenses/LICENSE-2.0.html")
    {
        parent::__construct("Apache 2.0");
        $this->setUrl($url);
    }
}
