<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Tags;

use WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs;
use WoohooLabs\SpecGenerator\Utilities\Generator;

class Tag implements TagInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs
     */
    private $externalDocs;

    /**
     * @param string $name
     */
    public function __construct($name = null)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= ["name" => $this->name];

        $result= Generator::addItemToArrayIfNotEmpty($result, "description", $this->description);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "externalDocs", $this->externalDocs);

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
     * @return \WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs
     */
    public function getExternalDocs()
    {
        return $this->externalDocs;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs $externalDocs
     * @return $this
     */
    public function setExternalDocs(ExternalDocs $externalDocs)
    {
        $this->externalDocs = $externalDocs;

        return $this;
    }
}
