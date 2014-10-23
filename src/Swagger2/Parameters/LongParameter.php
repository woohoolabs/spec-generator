<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

class LongParameter extends IntegerParameter
{
    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     */
    public function __construct($name = null, $in = null, $required = null)
    {
        parent::__construct($name, $in, "int64", $required);
    }
}
