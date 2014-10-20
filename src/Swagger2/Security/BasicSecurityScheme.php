<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Security;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class BasicSecurityScheme extends SecurityScheme
{
    /**
     * @param string|null $description
     */
    public function __construct($description = null)
    {
        parent::__construct("basic", $description);
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= ["type" => $this->getType()];

        $result= Generator::addItemToArrayIfNotNull($result, "description", $this->getDescription());

        return $result;
    }
}
