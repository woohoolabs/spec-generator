<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class SchemaProperty extends ObjectSchema
{
    use ObjectSchemaTrait;

    /**
     * @var boolean
     */
    private $readOnly;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Xml\Xml
     */
    private $xml;

    /**
     * @param string $format
     */
    public function __construct($format = null)
    {
        parent::__construct($format);
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= [];
        $result= Generator::addItemToArrayIfNotEmpty($result, "readOnly", $this->readOnly);
        $result= Generator::addItemToArrayIfNotEmpty($result, "xml", $this->xml);

        return array_merge(parent::generate(), $result);
    }
}
