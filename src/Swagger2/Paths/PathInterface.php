<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Paths;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface PathInterface extends GeneratableInterface
{
    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    public function getGet();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    public function getPost();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    public function getPut();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    public function getDelete();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    public function getPatch();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    public function getOptions();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Operations\OperationInterface
     */
    public function getHead();

    /**
     * @return array
     */
    public function getParameters();
}
