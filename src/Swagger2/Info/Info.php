<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Info;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class Info implements InfoInterface
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $termsOfService;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Info\ContactInterface
     */
    private $contact;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Info\LicenceInterface
     */
    private $licence;

    /**
     * @var string
     */
    private $version;

    /**
     * @param string $title
     * @param string $version
     */
    public function __construct($title = null, $version = null)
    {
        $this->title = $title;
        $this->version = $version;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= ["title" => $this->title];

        $result= Generator::addItemToArrayIfNotNull($result, "description", $this->description);
        $result= Generator::addItemToArrayIfNotNull($result, "termsOfService", $this->termsOfService);
        $result= Generator::addItemToArrayIfNotNull($result, "contact", $this->contact->generate());
        $result= Generator::addItemToArrayIfNotNull($result, "licence", $this->licence->generate());

        $result["version"] = $this->version;

        return $result;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfService()
    {
        return $this->termsOfService;
    }

    /**
     * @param string $termsOfService
     * @return $this
     */
    public function setTermsOfService($termsOfService)
    {
        $this->termsOfService = $termsOfService;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Info\ContactInterface
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Info\ContactInterface $contact
     * @return $this
     */
    public function setContact(ContactInterface $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Info\LicenceInterface
     */
    public function getLicence()
    {
        return $this->licence;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Info\LicenceInterface $licence
     * @return $this
     */
    public function setLicence(LicenceInterface $licence)
    {
        $this->licence = $licence;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }
}
