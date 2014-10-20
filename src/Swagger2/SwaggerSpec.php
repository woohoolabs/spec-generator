<?php
namespace WoohooLabs\SpecGenerator\Swagger2;

class SwaggerSpec implements SwaggerSpecInterface
{
    private $swagger= "2.0";

    private $info;

    private $host;

    private $basePath;

    private $schemes;

    private $consumes;

    private $produces;

    private $paths;

    private $definitions;

    private $parameters;

    private $responses;

    private $securityDefinitions;

    private $security;

    private $tags;

    private $externalDocs;

    /**
     * @return mixed
     */
    public function generate()
    {
    }
}
