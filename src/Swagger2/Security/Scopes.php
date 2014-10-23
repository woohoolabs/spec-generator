<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Security;

class Scopes implements ScopesInterface
{
    /**
     * @var array
     */
    private $scopes= [];

    /**
     * @param array $scopes
     */
    public function __construct(array $scopes = [])
    {
        $this->scopes = $scopes;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= [];

        foreach ($this->scopes as $name => $description) {
            $result[$name]= $description;
        }

        return $result;
    }

    /**
     * @param string $name
     * @return string|null
     */
    public function getScope($name)
    {
        return isset($this->scopes[$name]) ? $this->scopes[$name] : null;
    }

    /**
     * @return array
     */
    public function getResponses()
    {
        return $this->scopes;
    }

    /**
     * @param string $name
     * @param string $description
     * @return $this
     */
    public function setScope($name, $description)
    {
        $this->scopes[$name] = $description;

        return $this;
    }

    /**
     * @param array $scopes
     * @return $this
     */
    public function setScopes(array $scopes)
    {
        $this->scopes = $scopes;

        return $this;
    }
}
