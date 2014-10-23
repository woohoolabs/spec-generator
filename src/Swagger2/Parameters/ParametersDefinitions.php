<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

class ParametersDefinitions implements ParametersDefinitionsInterface
{
    /**
     * @var array
     */
    private $parameters= [];

    /**
     * @param array $parameters
     * @return $this
     */
    public static function create(array $parameters = [])
    {
        return new self($parameters);
    }

    /**
     * @param array $parameters
     */
    public function __construct(array $parameters = [])
    {
        $this->parameters = $parameters;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= [];

        foreach ($this->parameters as $name => $parameter) {
            if ($parameter instanceof ParameterInterface) {
                $result[$name] = $parameter->generate();
            }
        }

        return $result;
    }

    /**
     * @param string $name
     * @return \WoohooLabs\SpecGenerator\Swagger2\Parameters\ParameterInterface|null
     */
    public function getParameter($name)
    {
        return isset($this->parameters[$name]) ? $this->parameters[$name] : null;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param string $name
     * @param \WoohooLabs\SpecGenerator\Swagger2\Parameters\ParameterInterface $parameter
     * @return $this
     */
    public function setParameter($name, ParameterInterface $parameter)
    {
        $this->parameters[$name] = $parameter;

        return $this;
    }

    /**
     * @param array $parameters
     * @return $this
     */
    public function setParameters(array $parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }
}
