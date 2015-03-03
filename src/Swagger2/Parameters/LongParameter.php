<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

class LongParameter extends IntegerParameter
{
    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     * @param string $format
     * @return $this
     */
    public static function create($name = null, $in = null, $required = null, $format = "int64")
    {
        return new self($name, $in, $required, $format);
    }

    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     * @param string $format
     */
    public function __construct($name = null, $in = null, $required = null, $format = "int64")
    {
        parent::__construct($name, $in, $required, $format);
    }
}
