<?php
namespace WoohooLabs\SpecGenerator\Swagger2\References;

use WoohooLabs\SpecGenerator\Swagger2\Parameters\ParameterInterface;

class ParameterRef extends Ref implements RefInterface, ParameterInterface
{
    /**
     * @param string $ref
     */
    public function __construct($ref = null)
    {
        parent::__construct($ref);
    }

    /**
     * @return array
     */
    public function generate()
    {
        return ['$ref' => "#/definitions/" . $this->getRef()];
    }
}
