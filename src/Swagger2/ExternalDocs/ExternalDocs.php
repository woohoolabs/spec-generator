<?php
namespace WoohooLabs\SpecGenerator\Swagger2\ExternalDocs;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class ExternalDocs implements ExternalDocsInterface
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $url;

    /**
     * @param string $url
     * @return $this
     */
    public static function create($url= null)
    {
        return new self($url);
    }

    /**
     * @param string $url
     */
    public function __construct($url= null)
    {
        $this->url = $url;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= Generator::addItemToArrayIfNotEmpty([], "description", $this->description);
        $result["url"]= $this->url;

        return $result;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
