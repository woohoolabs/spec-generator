<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

class DateParameter extends StringParameter
{
    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     */
    public function __construct($name = null, $in = null, $required = null)
    {
        parent::__construct($name, $in, "date", $required);
    }
}