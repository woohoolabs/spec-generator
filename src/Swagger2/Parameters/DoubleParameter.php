<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

class DoubleParameter extends NumberParameter
{
    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     * @param string $format
     * @return $this
     */
    public static function create($name = null, $in = null, $required = null, $format = "double")
    {
        return new self($name, $in, $required, $format);
    }

    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     * @param string $format
     */
    public function __construct($name = null, $in = null, $required, $format = "double")
    {
        parent::__construct($name, $in, $required, $format);
    }
}
