<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Security;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface ScopesInterface extends GeneratableInterface
{
    /**
     * @param string $name
     * @return string|null
     */
    public function getName($name);

    /**
     * @return array
     */
    public function getNames();
}
