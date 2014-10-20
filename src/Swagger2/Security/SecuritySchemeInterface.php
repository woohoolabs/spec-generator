<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Security;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface SecuritySchemeInterface extends GeneratableInterface
{
    /**
     * @return string
     */
    public function getType();

    /**
     * @return string
     */
    public function getDescription();
}
