<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Security;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class ApiKeySecurityScheme extends SecurityScheme
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $in;

    /**
     * @param string|null $description
     * @param string|null $name
     * @param string|null $in
     */
    public function __construct($description = null, $name = null, $in = null)
    {
        parent::__construct("apiKey", $description);
        $this->name= $name;
        $this->in= $in;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= ["type" => $this->getType()];

        $result= Generator::addScalarToArrayIfNotNull($result, "description", $this->getDescription());
        $result= Generator::addScalarToArrayIfNotNull($result, "name", $this->name);
        $result= Generator::addScalarToArrayIfNotNull($result, "in", $this->in);

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
    public function getIn()
    {
        return $this->in;
    }

    /**
     * @param string $in
     * @return $this
     */
    public function setIn($in)
    {
        $this->in = $in;

        return $this;
    }
}
