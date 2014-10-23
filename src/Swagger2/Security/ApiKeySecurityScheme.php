<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Security;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class ApiKeySecurityScheme extends AbstractSecurityScheme
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
     * @param string $name
     * @param string $in
     */
    public function __construct($name = null, $in = null)
    {
        parent::__construct("apiKey");
        $this->name= $name;
        $this->in= $in;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= ["type" => $this->getType()];

        $result= Generator::addItemToArrayIfNotEmpty($result, "description", $this->getDescription());
        $result= Generator::addItemToArrayIfNotEmpty($result, "name", $this->name);
        $result= Generator::addItemToArrayIfNotEmpty($result, "in", $this->in);

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
