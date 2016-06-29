<?php

namespace WoohooLabs\SpecGenerator\Swagger2\Refs;

use WoohooLabs\SpecGenerator\Swagger2\Items\ItemsInterface;

/**
 * Defining a reference for array items.
 *
 * @author Niels Nijens <nijens.niels@gmail.com>
 */
class ItemsRef extends AbstractRef implements ItemsInterface
{
    /**
     * @return array
     */
    public function generate()
    {
        return ['$ref' => '#/definitions/'.$this->getRef()];
    }
}
