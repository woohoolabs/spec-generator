<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

use WoohooLabs\SpecGenerator\Utilities\Generator;

trait NumberSchemaTrait
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
     * @return array
     */
    public function generateNumberSchema()
    {
        $result= Generator::addScalarToArrayIfNotNull([], "maximum", $this->maximum);
        $result= Generator::addScalarToArrayIfNotNull($result, "exclusiveMaximum", $this->exclusiveMaximum);
        $result= Generator::addScalarToArrayIfNotNull($result, "minimum", $this->minimum);
        $result= Generator::addScalarToArrayIfNotNull($result, "exclusiveMinimum", $this->exclusiveMinimum);
        $result= Generator::addScalarToArrayIfNotNull($result, "multipleOf", $this->multipleOf);

        return $result;
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
