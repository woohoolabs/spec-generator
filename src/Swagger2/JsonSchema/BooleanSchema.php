<?php
namespace WoohooLabs\SpecGenerator\Swagger2\JsonSchema;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class BooleanSchema extends AbstractSchema
{
    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct("boolean", $format);
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
        $result= Generator::addItemToArrayIfNotEmpty($result, "enum", $this->getEnum());

        return $result;
    }

    /**
     * @return boolean
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param boolean $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }
}
