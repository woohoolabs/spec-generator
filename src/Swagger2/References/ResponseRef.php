<?php
namespace WoohooLabs\SpecGenerator\Swagger2\References;

use WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface;

class ResponseRef extends Ref implements RefInterface, ResponseInterface
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
