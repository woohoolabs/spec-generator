<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class StringHeader extends AbstractHeader
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
        $result= Generator::addItemToArrayIfNotNull([], "description", $this->getDescription());
        $result["type"] = $this->getType();
        $result= Generator::addItemToArrayIfNotNull($result, "format", $this->getFormat());
        $result= Generator::addItemToArrayIfNotNull($result, "default", $this->default);
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
