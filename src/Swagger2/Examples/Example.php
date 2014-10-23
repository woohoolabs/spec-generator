<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Examples;

use WoohooLabs\SpecGenerator\GeneratableInterface;

class Example implements ExampleInterface
{
    /**
     * @var array
     */
    private $examples= [];

    /**
     * @param array $allProduces
     */
    public function __construct(array $allProduces = [])
    {
        $this->examples = $allProduces;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= [];

        foreach ($this->examples as $mime => $produces) {
            $result[$mime] = $produces instanceof GeneratableInterface ? $produces->generate() : $produces;
        }

        return $result;
    }

    /**
     * @param string $mime
     * @return mixed
     */
    public function getProduces($mime)
    {
        return isset($this->examples[$mime]) ? $this->examples[$mime] : null;
    }

    /**
     * @return array
     */
    public function getAllProduces()
    {
        return $this->examples;
    }

    /**
     * @param string $mime
     * @param mixed $produces
     * @return $this
     */
    public function setProduces($mime, $produces)
    {
        $this->examples[$mime] = $produces;

        return $this;
    }

    /**
     * @param array $allProduces
     * @return $this
     */
    public function setAllProduces(array $allProduces)
    {
        $this->examples = $allProduces;

        return $this;
    }
}
