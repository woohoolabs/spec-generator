<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Info;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class Contact implements ContactInterface
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
     * @var string
     */
    private $email;

    /**
     * @param string $name
     * @param string $url
     * @param string $email
     * @return $this
     */
    public static function create($name = null, $url = null, $email = null)
    {
        return new self($name, $url, $email);
    }

    /**
     * @param string $name
     * @param string $url
     * @param string $email
     */
    public function __construct($name = null, $url= null, $email = null)
    {
        $this->name = $name;
        $this->url = $url;
        $this->email = $email;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= Generator::addItemToArrayIfNotEmpty([], "name", $this->name);
        $result= Generator::addItemToArrayIfNotEmpty($result, "url", $this->url);
        $result= Generator::addItemToArrayIfNotEmpty($result, "email", $this->email);

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

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
