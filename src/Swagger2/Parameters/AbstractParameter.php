<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

use WoohooLabs\SpecGenerator\Swagger2\Schema\BasicSchemaTrait;
use WoohooLabs\SpecGenerator\Utilities\Generator;

abstract class AbstractParameter implements ParameterInterface
{
    use BasicSchemaTrait;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $in;

    /**
     * @var boolean
     */
    private $required;

    /**
     * @param string $name
     * @param string $in
     * @param string $type
     * @param boolean $required
     */
    public function __construct($name, $in, $type, $required)
    {
        $this->name= $name;
        $this->in= $in;
        $this->setType($type);
        $this->required= $required;
    }

    /**
     * @return array
     */
    public function generateBasicParameter()
    {
        $result1= Generator::addItemToArrayIfNotEmpty([], "name", $this->name);
        $result1= Generator::addItemToArrayIfNotEmpty($result1, "in", $this->in);
        $result2= Generator::addItemToArrayIfNotEmpty([], "required", $this->required);

        return array_merge($result1, $this->generateBasicSchema(), $result2);
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

    /**
     * @return boolean
     */
    public function isRequired()
    {
        return $this->required;
    }

    /**
     * @param boolean $required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }
}
