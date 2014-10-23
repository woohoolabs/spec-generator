<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Refs;

use WoohooLabs\SpecGenerator\Swagger2\Paths\PathInterface;

class PathRef extends AbstractRef implements RefInterface, PathInterface
{
    /**
     * @param string $ref
     * @return $this
     */
    public static function create($ref = null)
    {
        return new self($ref);
    }

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
