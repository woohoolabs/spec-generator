<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Responses;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface ResponsesDefinitionsInterface extends GeneratableInterface
{
    /**
     * @param string $name
     * @return \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface|null
     */
    public function getResponse($name);

    /**
     * @return array
     */
    public function getResponses();
}
