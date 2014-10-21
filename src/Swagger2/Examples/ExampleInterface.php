<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Examples;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface ExampleInterface extends GeneratableInterface
{
    /**
     * @param string $mime
     * @return mixed
     */
    public function getProduces($mime);

    /**
     * @return array
     */
    public function getAllProduces();
}
