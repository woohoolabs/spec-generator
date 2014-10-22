<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

use WoohooLabs\SpecGenerator\Utilities\Generator;

trait BooleanSchemaTrait
{
    /**
     * @var mixed
     */
    protected $default;

    /**
     * @return array
     */
    public function generateBooleanSchema()
    {
        $result= Generator::addScalarToArrayIfNotNull([], "default", $this->default);

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
