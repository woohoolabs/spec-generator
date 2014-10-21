<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Responses;

class ResponsesDefinitions implements ResponsesDefinitionsInterface
{
    /**
     * @var array
     */
    private $responses;

    /**
     * @param array $responses
     */
    public function __construct(array $responses = [])
    {
        $this->responses = $responses;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= [];

        foreach ($this->responses as $name => $response) {
            if ($response instanceof ResponseInterface) {
                $result[$name] = $response->generate();
            }
        }

        return $result;
    }

    /**
     * @param string $name
     * @return \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface|null
     */
    public function getResponse($name)
    {
        return isset($this->responses[$name]) ? $this->responses[$name] : null;
    }

    /**
     * @return array
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * @param string $name
     * @param \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponseInterface $response
     * @return $this
     */
    public function setResponse($name, ResponseInterface $response)
    {
        $this->responses[$name] = $response;

        return $this;
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
}
