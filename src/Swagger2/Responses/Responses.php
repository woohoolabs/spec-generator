<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Responses;

use WoohooLabs\SpecGenerator\Swagger2\HttpStatusCodes;
use WoohooLabs\SpecGenerator\Utilities\Generator;

class Responses implements ResponsesInterface
{
    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface
     */
    private $default;

    /**
     * @var array
     */
    private $responses= [];

    /**
     * @return array
     */
    public function generate()
    {
        $result= [];

        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "default", $this->default);
        foreach ($this->responses as $httpStatusCode => $response) {
            $result= Generator::addGeneratableToArrayIfNotEmpty($result, $httpStatusCode, $response);
        }

        return $result;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface|null
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface $default
     * @return $this
     */
    public function setDefault(ResponseInterface $default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @param string $httpStatusCode
     * @return \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface|null
     */
    public function getResponse($httpStatusCode)
    {
        return isset($this->responses[$httpStatusCode]) ? $this->responses[$httpStatusCode] : null;
    }

    /**
     * @return array
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * @param array $responses
     * @return $this
     */
    public function setResponses(array $responses)
    {
        $this->responses = $responses;

        return $this;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface $response
     * @return $this
     */
    public function setSuccessResponse(ResponseInterface $response)
    {
        return $this->setResponse(HttpStatusCodes::HTTP_OK, $response);
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface $response
     * @return $this
     */
    public function setCreatedResponse(ResponseInterface $response)
    {
        return $this->setResponse(HttpStatusCodes::HTTP_CREATED, $response);
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface $response
     * @return $this
     */
    public function setAcceptedResponse(ResponseInterface $response)
    {
        return $this->setResponse(HttpStatusCodes::HTTP_ACCEPTED, $response);
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface $response
     * @return $this
     */
    public function setBadRequestResponse(ResponseInterface $response)
    {
        return $this->setResponse(HttpStatusCodes::HTTP_BAD_REQUEST, $response);
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface $response
     * @return $this
     */
    public function setUnauthorizedResponse(ResponseInterface $response)
    {
        return $this->setResponse(HttpStatusCodes::HTTP_UNAUTHORIZED, $response);
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface $response
     * @return $this
     */
    public function setForbiddenResponse(ResponseInterface $response)
    {
        return $this->setResponse(HttpStatusCodes::HTTP_FORBIDDEN, $response);
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface $response
     * @return $this
     */
    public function setInternalServerErrorResponse(ResponseInterface $response)
    {
        return $this->setResponse(HttpStatusCodes::HTTP_INTERNAL_SERVER_ERROR, $response);
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface $response
     * @return $this
     */
    public function setBadGatewayResponse(ResponseInterface $response)
    {
        return $this->setResponse(HttpStatusCodes::HTTP_BAD_GATEWAY, $response);
    }

    /**
     * @param string $httpStatusCode
     * @param \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface $response
     * @return $this
     */
    public function setResponse($httpStatusCode, ResponseInterface $response)
    {
        $this->responses[$httpStatusCode] = $response;

        return $this;
    }
}
