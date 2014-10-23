<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Security;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class BasicSecurityScheme extends AbstractSecurityScheme
{
    /**
     * @return $this
     */
    public static function create()
    {
        return new self();
    }

    public function __construct()
    {
        parent::__construct("basic");
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= ["type" => $this->getType()];

        $result= Generator::addItemToArrayIfNotEmpty($result, "description", $this->getDescription());

        return $result;
    }
}
