<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Security;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface SecurityDefinitionsInterface extends GeneratableInterface
{
    /**
     * @param string $scheme
     * @return array
     */
    public function getScheme($scheme);

    /**
     * @return array
     */
    public function getSchemes();
}
