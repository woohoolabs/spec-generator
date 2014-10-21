<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface HeaderInterface extends GeneratableInterface
{
    /**
     * @return mixed
     */
    public function getDefault();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getType();

    /**
     * @return string
     */
    public function getFormat();

    /**
     * @return array
     */
    public function getEnum();
}
