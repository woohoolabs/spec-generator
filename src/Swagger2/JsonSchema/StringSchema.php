<?php
namespace WoohooLabs\SpecGenerator\Swagger2\JsonSchema;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class StringSchema extends AbstractSchema
{
    /**
     * @var integer
     */
    private $maxLength;

    /**
     * @var integer
     */
    private $minLength;

    /**
     * @var string
     */
    private $pattern;

    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct("string", $format);
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
        $result= Generator::addScalarToArrayIfNotNull($result, "maxLength", $this->maxLength);
        $result= Generator::addScalarToArrayIfNotNull($result, "minLength", $this->minLength);
        $result= Generator::addScalarToArrayIfNotNull($result, "pattern", $this->pattern);
        $result= Generator::addItemToArrayIfNotEmpty($result, "enum", $this->getEnum());

        return $result;
    }

    /**
     * @return string
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param string $default
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
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * @param integer $maxLength
     * @return $this
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMinLength()
    {
        return $this->minLength;
    }

    /**
     * @param integer $minLength
     * @return $this
     */
    public function setMinLength($minLength)
    {
        $this->minLength = $minLength;

        return $this;
    }

    /**
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     * @return $this
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;

        return $this;
    }
}
