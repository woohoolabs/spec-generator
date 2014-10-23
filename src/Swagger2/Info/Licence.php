<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Info;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class Licence implements LicenceInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @param string $name
     * @param string $url
     * @return $this
     */
    public static function create($name = null, $url = null)
    {
        return new self($name, $url);
    }

    /**
     * @param string $name
     * @param string $url
     */
    public function __construct($name = null, $url = null)
    {
        $this->name = $name;
        $this->url = $url;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= ["name" => $this->name];
        $result= Generator::addItemToArrayIfNotEmpty($result, "url", $this->url);

        return $result;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}
