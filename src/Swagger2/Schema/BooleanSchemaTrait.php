<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Schema;

trait BooleanSchemaTrait
{
    use PrimitiveSchemaTrait;

    /**
     * @return array
     */
    public function generateBooleanSchema()
    {
        return array_merge($this->generatePrimitiveSchema(), []);
    }
}
