<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Parameters;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface ParametersDefinitionsInterface extends GeneratableInterface
{
    /**
     * @param string $name
     * @return \WoohooLabs\SpecGenerator\Swagger2\Parameters\ParameterInterface|null
     */
    public function getParameter($name);

    /**
     * @return array
     */
    public function getParameters();
}
