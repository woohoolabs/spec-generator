<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

use WoohooLabs\SpecGenerator\Swagger2\Schema\NumberSchemaTrait;

class NumberHeader extends AbstractHeader
{
    use NumberSchemaTrait;

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
        parent::__construct("number");
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
