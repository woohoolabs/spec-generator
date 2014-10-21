<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface HeadersInterface extends GeneratableInterface
{
    /**
     * @param string $name
     * @return \WoohooLabs\SpecGenerator\Swagger2\Headers\HeaderInterface|null
     */
    public function getHeader($name);

    /**
     * @return array
     */
    public function getHeaders();
}
