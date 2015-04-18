<?php
namespace WoohooLabs\SpecGenerator\Swagger2;

use Doctrine\Common\Cache\Cache;
use WoohooLabs\SpecGenerator\Swagger2\Definitions\Definitions;
use WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs;
use WoohooLabs\SpecGenerator\Swagger2\Info\Info;
use WoohooLabs\SpecGenerator\Swagger2\Parameters\ParametersDefinitions;
use WoohooLabs\SpecGenerator\Swagger2\Paths\Paths;
use WoohooLabs\SpecGenerator\Swagger2\Security\SecurityDefinitions;
use WoohooLabs\SpecGenerator\Utilities\Generator;

class SwaggerSpec implements SwaggerSpecInterface
{
    /**
     * @var \Doctrine\Common\Cache\Cache
     */
    private $cache;

    /**
     * @var string
     */
    private $cacheId;

    /**
     * @var string
     */
    private $swagger= "2.0";

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Info\Info
     */
    private $info;

    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    private $basePath;

    /**
     * @var array
     */
    private $schemes= [];

    /**
     * @var array
     */
    private $consumes= [];

    /**
     * @var array
     */
    private $produces= [];

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Paths\Paths
     */
    private $paths;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Definitions\Definitions
     */
    private $definitions;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Parameters\ParametersDefinitions
     */
    private $parameters;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Responses\Responses
     */
    private $responses;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Security\SecurityDefinitions
     */
    private $securityDefinitions;

    /**
     * @var array
     */
    private $security= [];

    /**
     * @var array
     */
    private $tags= [];

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs
     */
    private $externalDocs;

    /**
     * @param callable $getSpec
     * @param \Doctrine\Common\Cache\Cache $cache
     * @param string $cacheId
     * @return array
     */
    public static function getSpecification(callable $getSpec = null, Cache $cache = null, $cacheId = "woohoolabs.specgenerator.swagger")
    {
        if ($cache !== null && $cache->contains($cacheId)) {
            return $cache->fetch($cacheId);
        }

        return call_user_func($getSpec, new self($cache, $cacheId));
    }

    /**
     * @param \Doctrine\Common\Cache\Cache $cache
     * @param string $cacheId
     * @return $this
     */
    public static function create(Cache $cache = null, $cacheId = "woohoolabs.specgenerator.swagger")
    {
        return new self($cache, $cacheId);
    }

    /**
     * @param \Doctrine\Common\Cache\Cache $cache
     * @param string $cacheId
     */
    public function __construct(Cache $cache = null, $cacheId = "woohoolabs.specgenerator.swagger")
    {
        $this->cache = $cache;
        $this->cacheId = $cacheId;

        return $this;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= ["swagger" => $this->swagger];
        $result["info"] = $this->info !== null ? $this->info->generate() : null;
        $result= Generator::addItemToArrayIfNotEmpty($result, "host", $this->host);
        $result= Generator::addItemToArrayIfNotEmpty($result, "basePath", $this->basePath);
        $result= Generator::addItemToArrayIfNotEmpty($result, "schemes", $this->schemes);
        $result= Generator::addItemToArrayIfNotEmpty($result, "consumes", $this->consumes);
        $result= Generator::addItemToArrayIfNotEmpty($result, "produces", $this->produces);
        $result["paths"]= $this->paths !== null ? $this->paths->generate() : null;
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "definitions", $this->definitions);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "parameters", $this->parameters);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "responses", $this->responses);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "securityDefinitions", $this->securityDefinitions);
        foreach ($this->security as $security) {
            $result = Generator::pushGeneratableToArrayIfNotEmpty($result["security"], $security);
        }
        foreach ($this->tags as $tag) {
            $result = Generator::pushGeneratableToArrayIfNotEmpty($result["tags"], $tag);
        }
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "externalDocs", $this->externalDocs);

        if ($this->cache !== null) {
            $this->cache->save($this->cacheId, $result);
        }

        return $result;
    }

    /**
     * @return string
     */
    public function getSwagger()
    {
        return $this->swagger;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Info\Info
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Info\Info $info
     * @return $this
     */
    public function setInfo(Info $info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * @return string
     */
    public function getBasePath()
    {
        return $this->basePath;
    }

    /**
     * @param string $basePath
     * @return $this
     */
    public function setBasePath($basePath)
    {
        $this->basePath = $basePath;

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
     * @return \WoohooLabs\SpecGenerator\Swagger2\Paths\Paths
     */
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Paths\Paths $paths
     * @return $this
     */
    public function setPaths(Paths $paths)
    {
        $this->paths = $paths;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Definitions\Definitions
     */
    public function getDefinitions()
    {
        return $this->definitions;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Definitions\Definitions $definitions
     * @return $this
     */
    public function setDefinitions(Definitions $definitions)
    {
        $this->definitions = $definitions;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Parameters\ParametersDefinitions
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Parameters\ParametersDefinitions $parameters
     * @return $this
     */
    public function setParameters(ParametersDefinitions $parameters)
    {
        $this->parameters = $parameters;

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
    public function setResponses($responses)
    {
        $this->responses = $responses;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Security\SecurityDefinitions
     */
    public function getSecurityDefinitions()
    {
        return $this->securityDefinitions;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Security\SecurityDefinitions $securityDefinitions
     * @return $this
     */
    public function setSecurityDefinitions(SecurityDefinitions $securityDefinitions)
    {
        $this->securityDefinitions = $securityDefinitions;

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
}
