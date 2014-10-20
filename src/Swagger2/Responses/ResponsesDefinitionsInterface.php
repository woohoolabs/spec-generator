<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Responses;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface ResponsesDefinitionsInterface extends GeneratableInterface
{
    /**
     * @param string $name
     * @return array
     */
    public function getResponse($name);

    /**
     * @return array
     */
    public function getResponses();
}
