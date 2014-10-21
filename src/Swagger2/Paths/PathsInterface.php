<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Paths;

use WoohooLabs\SpecGenerator\GeneratableInterface;

interface PathsInterface extends GeneratableInterface
{
    /**
     * @param string $route
     * @return \WoohooLabs\SpecGenerator\Swagger2\Paths\PathInterface|null
     */
    public function getPath($route);

    /**
     * @return array
     */
    public function getPaths();

    /**
     * @param string $route
     * @param \WoohooLabs\SpecGenerator\Swagger2\Paths\PathInterface $path
     * @return $this
     */
    public function setPath($route, PathInterface $path);

    /**
     * @param array $paths
     * @return $this
     */
    public function setPaths(array $paths);
}
