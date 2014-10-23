<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Security;

class SecurityDefinitions implements SecurityRequirementInterface
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

        foreach ($this->schemes as $name => $scheme) {
            if ($scheme instanceof SecuritySchemeInterface) {
                $result[$name] = $scheme->generate();
            }
        }

        return $result;
    }

    /**
     * @param string $name
     * @return \WoohooLabs\SpecGenerator\Swagger2\Security\AbstractSecurityScheme
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
     * @param string $name
     * @param \WoohooLabs\SpecGenerator\Swagger2\Security\AbstractSecurityScheme $scheme
     * @return $this
     */
    public function setScheme($name, AbstractSecurityScheme $scheme)
    {
        $this->schemes[$name] = $scheme;

        return $this;
    }

    /**
     * @param array $schemes
     * @return $this
     */
    public function setSchemes(array $schemes)
    {
        $this->schemes = $schemes;

        return $this;
    }
}
