<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Info;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface InfoInterface extends GeneratableInterface
{
    /**
     * @return mixed
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getTermsOfService();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Info\ContactInterface
     */
    public function getContact();

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Info\LicenceInterface
     */
    public function getLicence();

    /**
     * @return string
     */
    public function getVersion();
}
