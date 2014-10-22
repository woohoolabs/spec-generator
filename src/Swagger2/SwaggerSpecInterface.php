<?php
namespace WoohooLabs\SpecGenerator\Swagger2;

use WoohooLabs\SpecGenerator\SpecInterface;

interface SwaggerSpecInterface extends SpecInterface
{
    /**
     * @return string
     */
    public function getSwagger();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Info\InfoInterface
     */
    public function getInfo();

    /**
     * @return string
     */
    public function getHost();

    /**
     * @return string
     */
    public function getBasePath();

    /**
     * @return array
     */
    public function getSchemes();

    /**
     * @return array
     */
    public function getConsumes();

    /**
     * @return array
     */
    public function getProduces();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Paths\Paths
     */
    public function getPaths();

    public function getDefinitions();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Parameters\Parameters
     */
    public function getParameters();

    public function getResponses();

    public function getSecurityDefinitions();

    public function getSecurity();

    /**
     * @return array
     */
    public function getTags();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocs
     */
    public function getExternalDocs();
}
