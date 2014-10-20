<?php
namespace WoohooLabs\SpecGenerator\Swagger2\DataTypes;

use WoohooLabs\SpecGenerator\Swagger2\DataTypeInterface;

abstract class AbstractDataType implements DataTypeInterface
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $format;

    /**
     * @param string $type
     * @param string $format
     */
    public function __construct($type, $format)
    {
        $this->type = $type;
        $this->format = $format;
    }

    /**
     * @return array
     */
    public function generate()
    {
        return [
            "type" => $this->type,
            "format" => $this->format
        ];
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }
}
