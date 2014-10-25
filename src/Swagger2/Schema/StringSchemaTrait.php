<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

use WoohooLabs\SpecGenerator\Utilities\Generator;

trait StringSchemaTrait
{
    use PrimitiveSchemaTrait;

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
     * @return array
     */
    public function generateStringSchema()
    {
        $result= $this->generatePrimitiveSchema();
        $result= Generator::addItemToArrayIfNotEmpty($result, "maxLength", $this->maxLength);
        $result= Generator::addItemToArrayIfNotEmpty($result, "minLength", $this->minLength);
        $result= Generator::addItemToArrayIfNotEmpty($result, "pattern", $this->pattern);

        return $result;
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
