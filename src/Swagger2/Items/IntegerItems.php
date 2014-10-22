<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Items;

use WoohooLabs\SpecGenerator\Swagger2\Schema\NumberSchemaTrait;

class IntegerItems extends AbstractItems
{
    use NumberSchemaTrait;

    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct("integer", $format);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateBasicSchema(), $this->generateNumberSchema());
    }
}
