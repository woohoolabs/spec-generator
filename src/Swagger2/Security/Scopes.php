<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Security;

class Scopes implements SecurityRequirementInterface
{
    /**
     * @var array
     */
    private $names;

    /**
     * @param array $names
     */
    public function __construct(array $names = [])
    {
        $this->names = $names;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= [];

        foreach ($this->names as $name => $description) {
            $result[$name]= $description;
        }

        return $result;
    }

    /**
     * @param string $name
     * @return string|null
     */
    public function getName($name)
    {
        return isset($this->names[$name]) ? $this->names[$name] : null;
    }

    /**
     * @return array
     */
    public function getResponses()
    {
        return $this->names;
    }

    /**
     * @param string $name
     * @param string $description
     * @return $this
     */
    public function setName($name, $description)
    {
        $this->names[$name] = $description;

        return $this;
    }

    /**
     * @param array $name
     * @return $this
     */
    public function setNames(array $name)
    {
        $this->names = $name;

        return $this;
    }
}
