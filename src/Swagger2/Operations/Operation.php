<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Operations;

use WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs;
use WoohooLabs\SpecGenerator\Swagger2\Parameters\ParameterInterface;
use WoohooLabs\SpecGenerator\Swagger2\Responses\Responses;
use WoohooLabs\SpecGenerator\Swagger2\Security\SecurityRequirement;
use WoohooLabs\SpecGenerator\Utilities\Generator;

class Operation implements OperationInterface
{
    /**
     * @var array
     */
    private $tags = [];

    /**
     * @var string
     */
    private $summary;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs
     */
    private $externalDocs;

    /**
     * @var string
     */
    private $operationId;

    /**
     * @var array
     */
    private $consumes = [];

    /**
     * @var array
     */
    private $produces = [];

    /**
     * @var array
     */
    private $parameters = [];

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Responses\Responses
     */
    private $responses;

    /**
     * @var array
     */
    private $schemes = [];

    /**
     * @var boolean
     */
    private $deprecated;

    /**
     * @var array
     */
    private $security = [];

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

        $result= Generator::addItemToArrayIfNotEmpty($result, "tags", $this->tags);
        $result= Generator::addItemToArrayIfNotEmpty($result, "summary", $this->summary);
        $result= Generator::addItemToArrayIfNotEmpty($result, "description", $this->description);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "externalDocs", $this->externalDocs);
        $result= Generator::addItemToArrayIfNotEmpty($result, "operationId", $this->operationId);
        $result= Generator::addItemToArrayIfNotEmpty($result, "consumes", $this->consumes);
        $result= Generator::addItemToArrayIfNotEmpty($result, "produces", $this->produces);
        foreach ($this->parameters as $parameter) {
            $result= Generator::pushGeneratableToArrayIfNotEmpty($result["parameters"], $parameter);
        }
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "responses", $this->responses);
        $result= Generator::addItemToArrayIfNotEmpty($result, "schemes", $this->schemes);
        $result= Generator::addItemToArrayIfNotEmpty($result, "deprecated", $this->deprecated);
        foreach ($this->security as $securityRequirement) {
            $result= Generator::pushGeneratableToArrayIfNotEmpty($result["security"], $securityRequirement);
        }

        return $result;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     * @return $this
     */
    public function setTags(array $tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs
     */
    public function getExternalDocs()
    {
        return $this->externalDocs;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs $externalDocs
     * @return $this
     */
    public function setExternalDocs(ExternalDocs $externalDocs)
    {
        $this->externalDocs = $externalDocs;

        return $this;
    }

    /**
     * @return string
     */
    public function getOperationId()
    {
        return $this->operationId;
    }

    /**
     * @param string $operationId
     * @return $this
     */
    public function setOperationId($operationId)
    {
        $this->operationId = $operationId;

        return $this;
    }

    /**
     * @return array
     */
    public function getConsumes()
    {
        return $this->consumes;
    }

    /**
     * @param array $consumes
     * @return $this
     */
    public function setConsumes(array $consumes)
    {
        $this->consumes = $consumes;

        return $this;
    }

    /**
     * @return array
     */
    public function getProduces()
    {
        return $this->produces;
    }

    /**
     * @param array $produces
     * @return $this
     */
    public function setProduces(array $produces)
    {
        $this->produces = $produces;

        return $this;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param array $parameters
     * @return $this
     */
    public function setParameters(array $parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Parameters\ParameterInterface $parameter
     * @return $this
     */
    public function addParameter(ParameterInterface $parameter)
    {
        $this->parameters[] = $parameter;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Responses\Responses
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Responses\Responses $responses
     * @return $this
     */
    public function setResponses(Responses $responses)
    {
        $this->responses = $responses;

        return $this;
    }

    /**
     * @return array
     */
    public function getSchemes()
    {
        return $this->schemes;
    }

    /**
     * @param array $schemes
     * @return $this
     */
    public function setSchemes(array $schemes)
    {
        $this->schemes = $schemes;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * @param boolean $deprecated
     * @return $this
     */
    public function setDeprecated($deprecated)
    {
        $this->deprecated = $deprecated;

        return $this;
    }

    /**
     * @return array
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * @param array $security
     * @return $this
     */
    public function setSecurity(array $security)
    {
        $this->security = $security;

        return $this;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Security\SecurityRequirement $securityRequirement
     * @return $this
     */
    public function setSecurityRequirement(SecurityRequirement $securityRequirement)
    {
        $this->security[] = $securityRequirement;

        return $this;
    }
}
