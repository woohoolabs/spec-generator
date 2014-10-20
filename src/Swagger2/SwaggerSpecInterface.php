<?php
namespace WoohooLabs\SpecGenerator\Swagger2;

use WoohooLabs\SpecGenerator\SpecInterface;

interface SwaggerSpecInterface extends SpecInterface
{
    public function getSwagger();

    public function getInfo();

    public function getHost();

    public function getBasePath();

    public function getSchemes();

    public function getConsumes();

    public function getProduces();

    public function getPaths();

    public function getDefinitions();

    public function getParameters();

    public function getResponses();

    public function getSecurityDefinitions();

    public function getSecurity();

    public function getTags();

    public function getExternalDocs();
}
