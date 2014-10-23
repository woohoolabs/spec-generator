<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Items;

use WoohooLabs\SpecGenerator\Swagger2\Schema\StringSchemaTrait;

class StringItems extends AbstractItems
{
    use StringSchemaTrait;

    /**
     * @param string $format
     * @return $this
     */
    public static function create($format = null)
    {
        return new self($format);
    }

    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct("string");
        $this->setFormat($format);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateBasicSchema(), $this->generateStringSchema());
    }
}
