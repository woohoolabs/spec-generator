<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

use WoohooLabs\SpecGenerator\Utilities\Generator;

trait PrimitiveSchemaTrait
{
    /**
     * @var string
     */
    private $format;

    /**
     * @return array
     */
    public function generatePrimitiveSchema()
    {
        return Generator::addItemToArrayIfNotEmpty([], "format", $this->getFormat());
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     * @return $this
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }
}
