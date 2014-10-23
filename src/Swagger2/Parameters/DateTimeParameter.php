<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

class DateTimeParameter extends StringParameter
{
    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     * @return $this
     */
    public static function create($name = null, $in = null, $required = null)
    {
        return new self($name, $in, $required);
    }

    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     */
    public function __construct($name = null, $in = null, $required = null)
    {
        parent::__construct($name, $in, "date-time", $required);
    }
}
