<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Paths;

use WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface;
use WoohooLabs\SpecGenerator\Swagger2\Parameters\ParameterInterface;
use WoohooLabs\SpecGenerator\Swagger2\References\PathRef;
use WoohooLabs\SpecGenerator\Utilities\Generator;

class Path implements PathInterface
{
    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\References\PathRef
     */
    private $ref;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    private $get;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    private $post;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    private $put;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    private $delete;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    private $patch;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    private $options;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
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

        if ($this->ref !== null) {
            $result = array_merge($result, $this->ref->generate());
        }
        $result= Generator::addScalarToArrayIfNotNull($result, "get", $this->get);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "get", $this->get);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "post", $this->post);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "put", $this->put);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "delete", $this->delete);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "patch", $this->patch);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "options", $this->options);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "head", $this->head);
        foreach ($this->parameters as $key => $parameter) {
            $result= Generator::pushGeneratableToArrayIfNotEmpty($result["parameters"], $parameter);
        }

        return $result;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\References\PathRef
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\References\PathRef $ref
     * @return $this
     */
    public function setRef(PathRef $ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    public function getGet()
    {
        return $this->get;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface $get
     * @return $this
     */
    public function setGet(OperationInterface $get)
    {
        $this->get = $get;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface $post
     * @return $this
     */
    public function setPost(OperationInterface $post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    public function getPut()
    {
        return $this->put;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface $put
     * @return $this
     */
    public function setPut(OperationInterface $put)
    {
        $this->put = $put;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface $delete
     * @return $this
     */
    public function setDelete(OperationInterface $delete)
    {
        $this->delete = $delete;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface $patch
     * @return $this
     */
    public function setPatch(OperationInterface $patch)
    {
        $this->patch = $patch;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface $options
     * @return $this
     */
    public function setOptions(OperationInterface $options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface $head
     * @return $this
     */
    public function setHead(OperationInterface $head)
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
    public function setParameter(ParameterInterface $parameter)
    {
        $this->parameters[] = $parameter;

        return $this;
    }
}
