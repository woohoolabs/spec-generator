<?php
namespace WoohooLabs\SpecGenerator\Utilities;

use WoohooLabs\SpecGenerator\GeneratableInterface;

class Generator
{
    /**
     * @param array $array
     * @param string $key
     * @param mixed $value
     * @return array
     */
    public static function addItemToArrayIfNotEmpty($array, $key, $value)
    {
        if ($value !== null && (is_array($value) === false || empty($value) === false)) {
            $array[$key] = $value;
        }

        return $array;
    }

    /**
     * @param array $array
     * @param string $key
     * @param \WoohooLabs\SpecGenerator\GeneratableInterface $value
     * @return array
     */
    public static function addGeneratableToArrayIfNotEmpty($array, $key, GeneratableInterface $value = null)
    {
        if ($value !== null) {
            $generation= $value->generate();
            if (is_array($generation) === true && empty($generation) === false) {
                $array[$key] = $generation;
            }
        }

        return $array;
    }

    /**
     * @param array                $array
     * @param GeneratableInterface $value
     *
     * @return array
     */
    public static function pushGeneratableToArrayIfNotEmpty(array $array, GeneratableInterface $value = null)
    {
        if ($value !== null) {
            $generation = $value->generate();
            if (is_array($generation) === true && empty($generation) === false) {
                $array[] = $generation;
            }
        }

        return $array;
    }

    /**
     * @param array $array
     * @param \WoohooLabs\SpecGenerator\GeneratableInterface $value
     * @return array
     */
    public static function mergeGeneratableToArrayIfNotEmpty($array, GeneratableInterface $value = null)
    {
        if ($value !== null) {
            $generation= $value->generate();
            if (is_array($generation) === true && empty($generation) === false) {
                $array= array_merge($array, $generation);
            }
        }

        return $array;
    }
}
