<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Xml;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface XmlInterface extends GeneratableInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getNamespace();

    /**
     * @return string
     */
    public function getPrefix();

    /**
     * @return boolean
     */
    public function isAttribute();

    /**
     * @return boolean
     */
    public function isWrapped();
}
