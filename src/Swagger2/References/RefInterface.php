<?php
namespace WoohooLabs\SpecGenerator\Swagger2\References;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface RefInterface extends GeneratableInterface
{
    /**
     * @return string
     */
    public function getRef();
}
