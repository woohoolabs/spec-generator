<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Security;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface SecurityRequirementInterface extends GeneratableInterface
{
    /**
     * @param string $name
     * @return array
     */
    public function getScheme($name);

    /**
     * @return array
     */
    public function getResponses();
}
