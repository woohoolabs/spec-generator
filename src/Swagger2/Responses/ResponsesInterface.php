<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Responses;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface ResponsesInterface extends GeneratableInterface
{
    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface|null
     */
    public function getDefault();

    /**
     * @param mixed $default
     * @return $this
     */
    public function setDefault(ResponseInterface $default);

    /**
     * @param string $httpStatusCode
     * @return \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface|null
     */
    public function getResponse($httpStatusCode);

    /**
     * @return array
     */
    public function getResponses();
}
