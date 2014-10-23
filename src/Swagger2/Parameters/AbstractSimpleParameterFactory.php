<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

use WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface;

abstract class AbstractSimpleParameterFactory extends AbstractParameterFactory
{
    /**
     * @param string $name
     * @param string $in
     * @param boolean $required
     */
    public function __construct($name, $in, $required = null)
    {
        parent::__construct($name, $in, $required);
    }

    /**
     * @param string $format
     * @return \WoohooLabs\SpecGenerator\Swagger2\Parameters\BooleanParameter
     */
    public function setBoolean($format = null)
    {
        return new BooleanParameter($this->name, $this->in, $this->required, $format);
    }

    /**
     * @param string $format
     * @return \WoohooLabs\SpecGenerator\Swagger2\Parameters\IntegerParameter
     */
    public function setInteger($format = "int32")
    {
        return new IntegerParameter($this->name, $this->in, $this->required, $format);
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Parameters\LongParameter
     */
    public function setLong()
    {
        return new LongParameter($this->name, $this->in, $this->required);
    }

    /**
     * @param string $format
     * @return \WoohooLabs\SpecGenerator\Swagger2\Parameters\NumberParameter
     */
    public function setNumber($format = null)
    {
        return new NumberParameter($this->name, $this->in, $this->required, $format);
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Parameters\FloatParameter
     */
    public function setFloat()
    {
        return new FloatParameter($this->name, $this->in, $this->required);
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Parameters\DoubleParameter
     */
    public function setDouble()
    {
        return new DoubleParameter($this->name, $this->in, $this->required);
    }

    /**
     * @param string $format
     * @return \WoohooLabs\SpecGenerator\Swagger2\Parameters\StringParameter
     */
    public function setString($format = null)
    {
        return new StringParameter($this->name, $this->in, $this->required, $format);
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Parameters\DateParameter
     */
    public function setDate()
    {
        return new DateParameter($this->name, $this->in, $this->required);
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Parameters\DateTimeParameter
     */
    public function setDateTime()
    {
        return new DateTimeParameter($this->name, $this->in, $this->required);
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface $items
     * @return \WoohooLabs\SpecGenerator\Swagger2\Parameters\ArrayParameter
     */
    public function setArray(ItemsInterface $items = null)
    {
        return new ArrayParameter($this->name, $this->in, $this->required, $items);
    }
}
