<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

use WoohooLabs\SpecGenerator\Swagger2\Schema\StringSchemaTrait;

class StringParameter extends AbstractParameter
{
    use StringSchemaTrait;

    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     * @param string $format
     * @return $this
     */
    public static function create($name = null, $in = null, $required = null, $format = null)
    {
        return new self($name, $in, $required, $format);
    }

    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     * @param string $format
     */
    public function __construct($name = null, $in = null, $required = null, $format = null)
    {
        parent::__construct($name, $in, "string", $required);
        $this->setFormat($format);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return array_merge($this->generateBasicParameter(), $this->generateStringSchema());
    }
}
