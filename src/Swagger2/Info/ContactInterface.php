<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Info;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface ContactInterface extends GeneratableInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return string
     */
    public function getEmail();
}
