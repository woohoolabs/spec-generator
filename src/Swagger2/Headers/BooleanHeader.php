<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

use WoohooLabs\SpecGenerator\Swagger2\Schema\BooleanSchemaTrait;

class AbstractBooleanHeader extends AbstractHeader
{
    use BooleanSchemaTrait;

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
        return array_merge($this->generateBasicSchema(), $this->generateBooleanSchema());
    }
}
