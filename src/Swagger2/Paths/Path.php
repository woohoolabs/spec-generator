<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Paths;

use WoohooLabs\SpecGenerator\Swagger2\Operations\Operation;
use WoohooLabs\SpecGenerator\Swagger2\Parameters\ParameterInterface;
use WoohooLabs\SpecGenerator\Swagger2\Refs\PathRef;
use WoohooLabs\SpecGenerator\Utilities\Generator;

class Path implements PathInterface
{
    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Refs\PathRef
     */
    private $ref;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation
     */
    private $get;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation
     */
    private $post;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation
     */
    private $put;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation
     */
    private $delete;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation
     */
    private $patch;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation
     */
    private $options;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation
     */
    private $head;

    /**
     * @var array
     */
    private $parameters= [];

    /**
     * @return array
     */
    public function generate()
    {
        $result= [];

        $result= Generator::mergeGeneratableToArrayIfNotEmpty($result, $this->ref);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "get", $this->get);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "get", $this->get);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "post", $this->post);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "put", $this->put);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "delete", $this->delete);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "patch", $this->patch);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "options", $this->options);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "head", $this->head);
        foreach ($this->parameters as $parameter) {
            $result= Generator::pushGeneratableToArrayIfNotEmpty($result["parameters"], $parameter);
        }

        return $result;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Refs\PathRef
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Refs\PathRef $ref
     * @return $this
     */
    public function setRef(PathRef $ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation
     */
    public function getGet()
    {
        return $this->get;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation $get
     * @return $this
     */
    public function setGet(Operation $get)
    {
        $this->get = $get;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation $post
     * @return $this
     */
    public function setPost(Operation $post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation
     */
    public function getPut()
    {
        return $this->put;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation $put
     * @return $this
     */
    public function setPut(Operation $put)
    {
        $this->put = $put;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation $delete
     * @return $this
     */
    public function setDelete(Operation $delete)
    {
        $this->delete = $delete;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation $patch
     * @return $this
     */
    public function setPatch(Operation $patch)
    {
        $this->patch = $patch;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation $options
     * @return $this
     */
    public function setOptions(Operation $options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Operations\Operation $head
     * @return $this
     */
    public function setHead(Operation $head)
    {
        $this->head = $head;

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
}
