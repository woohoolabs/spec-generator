<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Operations;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface OperationInterface extends GeneratableInterface
{
    /**
     * @return array
     */
    public function getTags();

    /**
     * @return string
     */
    public function getSummary();

    /**
     * @return string
     */
    public function getDescription();
    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocsInterface
     */
    public function getExternalDocs();

    /**
     * @return string
     */
    public function getOperationId();

    /**
     * @return array
     */
    public function getConsumes();
    /**
     * @return array
     */
    public function getProduces();

    /**
     * @return array
     */
    public function getParameters();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Responses\ResponsesInterface
     */
    public function getResponses();
    /**
     * @return array
     */
    public function getSchemes();

    /**
     * @return boolean
     */
    public function isDeprecated();
    /**
     * @return array
     */
    public function getSecurity();
}
