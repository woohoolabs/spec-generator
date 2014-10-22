<?php
namespace WoohooLabs\SpecGenerator\Swagger2\References;

use WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface;

class SchemaRef extends Ref implements RefInterface, SchemaInterface
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
