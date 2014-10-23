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
     * @var \WoohooLabs\SpecGenerator\Swagger2\Info\Contact
     */
    private $contact;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Info\Licence
     */
    private $licence;

    /**
     * @var string
     */
    private $version;

    /**
     * @param string $title
     * @param string $version
     * @return $this
     */
    public static function create($title = null, $version = null)
    {
        return new self($title, $version);
    }

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
        $result= Generator::addItemToArrayIfNotEmpty($result, "description", $this->description);
        $result= Generator::addItemToArrayIfNotEmpty($result, "termsOfService", $this->termsOfService);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "contact", $this->contact);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "licence", $this->licence);
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
     * @return \WoohooLabs\SpecGenerator\Swagger2\Info\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Info\Contact $contact
     * @return $this
     */
    public function setContact(Contact $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Info\Licence
     */
    public function getLicence()
    {
        return $this->licence;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Info\Licence $licence
     * @return $this
     */
    public function setLicence(Licence $licence)
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
