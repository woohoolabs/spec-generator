<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

use WoohooLabs\SpecGenerator\Utilities\Generator;

trait BasicSchemaTrait
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $type;

    /**
     * @var mixed
     */
    protected $default;

    /**
     * @var array
     */
    private $enum= [];

    /**
     * @return array
     */
    public function generateBasicSchema()
    {
        $result= Generator::addItemToArrayIfNotEmpty([], "description", $this->getDescription());
        $result["type"] = $this->getType();
        $result= Generator::addItemToArrayIfNotEmpty($result, "default", $this->default);
        $result= Generator::addItemToArrayIfNotEmpty($result, "enum", $this->getEnum());

        return $result;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    protected function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param mixed $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return array
     */
    public function getEnum()
    {
        return $this->enum;
    }

    /**
     * @param array $enum
     * @return $this
     */
    public function setEnum(array $enum)
    {
        $this->enum = $enum;

        return $this;
    }
}
