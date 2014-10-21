<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Responses;

use WoohooLabs\SpecGenerator\Swagger2\DataTypes\SchemaInterface;
use WoohooLabs\SpecGenerator\Swagger2\Examples\ExampleInterface;
use WoohooLabs\SpecGenerator\Swagger2\Headers\HeadersInterface;
use WoohooLabs\SpecGenerator\Utilities\Generator;

class Response implements ResponseInterface
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\DataTypes\SchemaInterface
     */
    private $schema;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Headers\HeadersInterface
     */
    private $headers;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Examples\ExampleInterface
     */
    private $examples;

    /**
     * @param string $description
     */
    public function __construct($description = null)
    {
        $this->description = $description;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= ["description" => $this->description];

        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "schema", $this->schema);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "headers", $this->headers);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "examples", $this->examples);

        return $result;
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
     * @return \WoohooLabs\SpecGenerator\Swagger2\DataTypes\SchemaInterface
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\DataTypes\SchemaInterface $schema
     * @return $this
     */
    public function setSchema(SchemaInterface $schema)
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Headers\HeadersInterface
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Headers\HeadersInterface $headers
     * @return $this
     */
    public function setHeaders(HeadersInterface $headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Examples\ExampleInterface
     */
    public function getExamples()
    {
        return $this->examples;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Examples\ExampleInterface $examples
     * @return $this
     */
    public function setExamples(ExampleInterface $examples)
    {
        $this->examples = $examples;

        return $this;
    }
}
