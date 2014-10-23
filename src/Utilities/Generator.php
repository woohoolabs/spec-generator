<?php
namespace WoohooLabs\SpecGenerator\Utilities;

use WoohooLabs\SpecGenerator\GeneratableInterface;

class Generator
{
    /**
     * @param array $array
     * @param string $key
     * @param \WoohooLabs\SpecGenerator\GeneratableInterface $value
     * @return array
     */
    public static function addGeneratableToArrayIfNotEmpty($array, $key, GeneratableInterface $value)
    {
        if ($value !== null) {
            $generation= $value->generate();
            if (is_array($generation) === true && empty($generation) === false) {
                $array[$key] = $value;
            }
        }

        return $array;
    }

    /**
     * @param array $array
     * @param \WoohooLabs\SpecGenerator\GeneratableInterface $value
     * @return array
     */
    public static function pushGeneratableToArrayIfNotEmpty($array, GeneratableInterface $value)
    {
        if ($value !== null) {
            $generation= $value->generate();
            if (is_array($generation) === true && empty($generation) === false) {
                $array[] = $value;
            }
        }

        return $array;
    }

    /**
     * @param array $array
     * @param \WoohooLabs\SpecGenerator\GeneratableInterface $value
     * @return array
     */
    public static function mergeGeneratableToArrayIfNotEmpty($array, GeneratableInterface $value)
    {
        if ($value !== null) {
            $generation= $value->generate();
            if (is_array($generation) === true && empty($generation) === false) {
                $array= array_merge($array, $value);
            }
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
        if ($value !== null && empty($value) === false) {
            $array[$key] = $value;
        }

        return $array;
    }
}
