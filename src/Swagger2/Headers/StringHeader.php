<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

use WoohooLabs\SpecGenerator\Swagger2\Schema\StringSchemaTrait;

class StringHeader extends AbstractHeader
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
    protected function __construct($format = null)
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
