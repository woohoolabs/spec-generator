<?php
namespace WoohooLabs\SpecGenerator\Swagger2\JsonSchema;

class IntegerSchema extends NumberSchema
{
    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        $this->setType("integer");
        $this->setFormat($format);
    }

    /**
     * @return integer
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param integer $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * @param integer $maximum
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;
    }

    /**
     * @return integer
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * @param integer $minimum
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;
    }
}
