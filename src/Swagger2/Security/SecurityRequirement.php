<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Security;

class SecurityRequirement implements SecurityRequirementInterface
{
    /**
     * @var array
     */
    private $schemes= [];

    /**
     * @param array $schemes
     * @return $this
     */
    public static function create(array $schemes = [])
    {
        return new self($schemes);
    }

    /**
     * @param array $schemes
     */
    public function __construct(array $schemes = [])
    {
        $this->schemes = $schemes;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= [];

        foreach ($this->schemes as $scheme => $scopes) {
            $result[$scheme]= $scopes;
        }

        return $result;
    }

    /**
     * @param string $name
     * @return array
     */
    public function getScheme($name)
    {
        return isset($this->schemes[$name]) ? $this->schemes[$name] : null;
    }

    /**
     * @return array
     */
    public function getResponses()
    {
        return $this->schemes;
    }

    /**
     * @param string $scheme
     * @param array $requirements
     * @return $this
     */
    public function setScheme($scheme, array $requirements)
    {
        $this->schemes[$scheme] = $requirements;

        return $this;
    }

    /**
     * @param array $name
     * @return $this
     */
    public function setSchemes(array $name)
    {
        $this->schemes = $name;

        return $this;
    }
}
