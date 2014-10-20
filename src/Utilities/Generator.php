<?php
namespace WoohooLabs\SpecGenerator\Utilities;

class Generator
{
    /**
     * @param array $array
     * @param string $key
     * @param mixed $value
     * @return array
     */
    public static function addItemToArrayIfNotNull($array, $key, $value)
    {
        if ($value !== null) {
            $array[$key] = $value;
        }

        return $array;
    }

    /**
     * @param array $array
     * @param string $key
     * @param mixed $value
     * @return array
     */
    public static function addItemToArrayIfNotEmpty($array, $key, $value)
    {
        if (empty($value) === false) {
            $array[$key] = $value;
        }

        return $array;
    }
}
