<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

use WoohooLabs\SpecGenerator\Swagger2\Schema\NumberSchemaTrait;

class NumberHeader extends AbstractHeader
{
    use NumberSchemaTrait;

    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct("number", $format);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateBasicSchema(), $this->generateNumberSchema());
    }
}
