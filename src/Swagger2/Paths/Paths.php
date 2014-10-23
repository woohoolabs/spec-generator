<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Paths;

class Paths implements PathsInterface
{
    /**
     * @var array
     */
    private $paths= [];

    public function __construct($paths = [])
    {
        $this->paths = $paths;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= [];

        foreach ($this->paths as $route => $path) {
            if ($path instanceof PathInterface) {
                $generation = $path->generate();
                if (empty($generation) === false) {
                    $result["/" . ltrim($route, "/")] = $generation;
                }
            }
        }

        return $result;
    }

    /**
     * @param string $route
     * @return \WoohooLabs\SpecGenerator\Swagger2\Paths\Path|null
     */
    public function getPath($route)
    {
        return isset($this->paths[$route]) ? $this->paths[$route] : null;
    }

    /**
     * @return array
     */
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * @param string $route
     * @param \WoohooLabs\SpecGenerator\Swagger2\Paths\Path $path
     * @return $this
     */
    public function setPath($route, Path $path)
    {
        $this->paths[$route]= $path;

        return $this;
    }

    /**
     * @param array $paths
     * @return $this
     */
    public function setPaths(array $paths)
    {
        $this->paths = $paths;

        return $this;
    }
}
