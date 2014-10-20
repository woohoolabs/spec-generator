<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Info;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface LicenceInterface extends GeneratableInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getUrl();
}
