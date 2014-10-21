<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class NumberHeader extends AbstractHeader
{
    /**
     * @var number
     */
    protected $maximum;

    /**
     * @var boolean
     */
    private $exclusiveMaximum;

    /**
     * @var number
     */
    protected $minimum;

    /**
     * @var boolean
     */
    private $exclusiveMinimum;

    /**
     * @var number
     */
    private $multipleOf;

    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct("number", $format);
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= Generator::addScalarToArrayIfNotNull([], "description", $this->getDescription());
        $result["type"] = $this->getType();
        $result= Generator::addScalarToArrayIfNotNull($result, "format", $this->getFormat());
        $result= Generator::addScalarToArrayIfNotNull($result, "default", $this->default);
        $result= Generator::addScalarToArrayIfNotNull($result, "maximum", $this->maximum);
        $result= Generator::addScalarToArrayIfNotNull($result, "exclusiveMaximum", $this->exclusiveMaximum);
        $result= Generator::addScalarToArrayIfNotNull($result, "minimum", $this->minimum);
        $result= Generator::addScalarToArrayIfNotNull($result, "exclusiveMinimum", $this->exclusiveMinimum);
        $result= Generator::addItemToArrayIfNotEmpty($result, "enum", $this->getEnum());
        $result= Generator::addScalarToArrayIfNotNull($result, "multipleOf", $this->multipleOf);

        return $result;
    }

    /**
     * @return number
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param number $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return number
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * @param number $maximum
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;
    }

    /**
     * @return boolean
     */
    public function isExclusiveMaximum()
    {
        return $this->exclusiveMaximum;
    }

    /**
     * @param boolean $exclusiveMaximum
     */
    public function setExclusiveMaximum($exclusiveMaximum)
    {
        $this->exclusiveMaximum = $exclusiveMaximum;
    }

    /**
     * @return number
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * @param number $minimum
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;
    }

    /**
     * @return boolean
     */
    public function isExclusiveMinimum()
    {
        return $this->exclusiveMinimum;
    }

    /**
     * @param boolean $exclusiveMinimum
     */
    public function setExclusiveMinimum($exclusiveMinimum)
    {
        $this->exclusiveMinimum = $exclusiveMinimum;
    }

    /**
     * @return number
     */
    public function getMultipleOf()
    {
        return $this->multipleOf;
    }

    /**
     * @param number $multipleOf
     */
    public function setMultipleOf($multipleOf)
    {
        $this->multipleOf = $multipleOf;
    }
}
