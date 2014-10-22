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
     * @var string
     */
    private $format;

    /**
     * @var mixed
     */
    protected $default;

    /**
     * @var array
     */
    private $enum;

    /**
     * @return array
     */
    public function generateBasicSchema()
    {
        $result= Generator::addScalarToArrayIfNotNull([], "description", $this->getDescription());
        $result["type"] = $this->getType();
        $result= Generator::addScalarToArrayIfNotNull($result, "format", $this->getFormat());
        $result= Generator::addScalarToArrayIfNotNull($result, "default", $this->default);
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
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     * @return $this
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
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
