<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Tags;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface TagInterface extends GeneratableInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\ExternalDocs\ExternalDocsInterface
     */
    public function getExternalDocs();
}
