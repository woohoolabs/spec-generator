<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

use WoohooLabs\SpecGenerator\Swagger2\Schema\NumberSchemaTrait;

class IntegerParameter extends AbstractParameter
{
    use NumberSchemaTrait;

    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     * @param string $format
     */
    public function __construct($name = null, $in = null, $required = null, $format = "int32")
    {
        parent::__construct($name, $in, "integer", $required);
        $this->setFormat($format);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateBasicParameter(), $this->generateNumberSchema());
    }
}
