<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Xml;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class Xml implements XmlInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $namespace;

    /**
     * @var string
     */
    private $prefix;

    /**
     * @var boolean
     */
    private $attribute;

    /**
     * @var boolean
     */
    private $wrapped;

    /**
     * @return array
     */
    public function generate()
    {
        $result= [];

        $result= Generator::addScalarToArrayIfNotNull($result, "name", $this->name);
        $result= Generator::addScalarToArrayIfNotNull($result, "namespace", $this->namespace);
        $result= Generator::addScalarToArrayIfNotNull($result, "prefix", $this->prefix);
        $result= Generator::addScalarToArrayIfNotNull($result, "attribute", $this->attribute);
        $result= Generator::addScalarToArrayIfNotNull($result, "wrapped", $this->wrapped);

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
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @param string $namespace
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param boolean $attribute
     * @return $this
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isWrapped()
    {
        return $this->wrapped;
    }

    /**
     * @param boolean $wrapped
     * @return $this
     */
    public function setWrapped($wrapped)
    {
        $this->wrapped = $wrapped;

        return $this;
    }
}
