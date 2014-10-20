<?php
namespace WoohooLabs\SpecGenerator\Swagger2\ExternalDocs;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface ExternalDocsInterface extends GeneratableInterface
{
    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getUrl();
}
