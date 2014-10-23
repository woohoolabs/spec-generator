<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

class DoubleParameter extends NumberParameter
{
    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     */
    public function __construct($name = null, $in = null, $required)
    {
        parent::__construct($name, $in, "double", $required);
    }
}
