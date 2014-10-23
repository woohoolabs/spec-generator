<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

abstract class AbstractParameterFactory
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $in;

    /**
     * @var boolean
     */
    protected $required;

    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     */
    public function __construct($name, $in, $required = false)
    {
        $this->name= $name;
        $this->in= $in;
        $this->required= $required;
    }
}
