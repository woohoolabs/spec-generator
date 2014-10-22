<?php
namespace WoohooLabs\SpecGenerator\Swagger2;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class SwaggerSpec implements SwaggerSpecInterface
{
    /**
     * @var string
     */
    private $swagger= "2.0";

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Info\InfoInterface
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
    private $schemes;

    /**
     * @var array
     */
    private $consumes;

    /**
     * @var array
     */
    private $produces;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Paths\Paths
     */
    private $paths;

    private $definitions;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Parameters\Parameters
     */
    private $parameters;

    private $responses;

    private $securityDefinitions;

    private $security;

    /**
     * @var array
     */
    private $tags;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs
     */
    private $externalDocs;

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Info\InfoInterface|null $info
     */
    public function __construct($info = null)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= ["swagger" => $this->swagger];
        $result["info"] = $this->info->generate();

        $result= Generator::addScalarToArrayIfNotNull($result, "host", $this->host);
        $result= Generator::addScalarToArrayIfNotNull($result, "basePath", $this->basePath);
        $result= Generator::addScalarToArrayIfNotNull($result, "schemes", $this->schemes);
        $result= Generator::addScalarToArrayIfNotNull($result, "consumes", $this->consumes);
        $result= Generator::addScalarToArrayIfNotNull($result, "produces", $this->produces);

        $result["paths"]= $this->paths->generate();

        return $result;
    }
}
