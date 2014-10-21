<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Responses;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface ResponseInterface extends GeneratableInterface
{
    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\DataTypes\SchemaInterface
     */
    public function getSchema();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Headers\HeadersInterface
     */
    public function getHeaders();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Examples\ExampleInterface
     */
    public function getExamples();
}
