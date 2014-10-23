<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Refs;

abstract class AbstractRef implements RefInterface
{
    /**
     * @var string
     */
    private $ref;

    /**
     * @param string $ref
     */
    public function __construct($ref = null)
    {
        $this->ref = $ref;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     * @return $this
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }
}
