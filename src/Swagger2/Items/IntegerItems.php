<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Items;

use WoohooLabs\SpecGenerator\Swagger2\Schema\NumberSchemaTrait;

class IntegerItems extends AbstractItems
{
    use NumberSchemaTrait;

    /**
     * @param string $format
     * @return $this
     */
    public static function create($format = "int32")
    {
        return new self($format);
    }

    /**
     * @param string $format
     */
    public function __construct($format = "int32")
    {
        parent::__construct("integer");
        $this->setFormat($format);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateBasicSchema(), $this->generateNumberSchema());
    }
}
