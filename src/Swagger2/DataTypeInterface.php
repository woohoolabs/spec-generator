<?php
namespace WoohooLabs\SpecGenerator\Swagger2;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface DataTypeInterface extends GeneratableInterface
{
    /**
     * @return string
     */
    public function getType();

    /**
     * @return string
     */
    public function getFormat();
}
