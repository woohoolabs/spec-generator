<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Responses;

use WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface;
use WoohooLabs\SpecGenerator\Swagger2\Examples\Example;
use WoohooLabs\SpecGenerator\Swagger2\Headers\Headers;
use WoohooLabs\SpecGenerator\Utilities\Generator;

class Response implements ResponseInterface
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface
     */
    private $schema;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Headers\Headers
     */
    private $headers;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Examples\Example
     */
    private $example;

    /**
     * @param string $description
     * @return $this
     */
    public static function create($description = null)
    {
        return new self($description);
    }

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
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "examples", $this->example);

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
     * @return \WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Schema\SchemaInterface $schema
     * @return $this
     */
    public function setSchema(SchemaInterface $schema)
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Headers\Headers
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Headers\Headers $headers
     * @return $this
     */
    public function setHeaders(Headers $headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Examples\Example
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Examples\Example $example
     * @return $this
     */
    public function setExample(Example $example)
    {
        $this->example = $example;

        return $this;
    }
}
