<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Security;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class Oauth2SecurityScheme extends SecurityScheme
{
    /**
     * @var string
     */
    private $flow;

    /**
     * @var string
     */
    private $authorizationUrl;

    /**
     * @var string
     */
    private $tokenUrl;

    /**
     * @var \WoohooLabs\SpecGenerator\Swagger2\Security\ScopesInterface
     */
    private $scopes;

    /**
     * @param string|null $description
     * @param string|null $flow
     * @param string|null $authorizationUrl
     * @param string|null $tokenUrl
     * @param \WoohooLabs\SpecGenerator\Swagger2\Security\ScopesInterface|null $scopes
     */
    public function __construct($description = null, $flow = null, $authorizationUrl = null, $tokenUrl = null, ScopesInterface $scopes = null)
    {
        parent::__construct("oauth2", $description);
        $this->flow= $flow;
        $this->authorizationUrl= $authorizationUrl;
        $this->tokenUrl= $tokenUrl;
        $this->scopes= $scopes;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= ["type" => $this->getType()];

        $result= Generator::addScalarToArrayIfNotNull($result, "description", $this->getDescription());
        $result= Generator::addScalarToArrayIfNotNull($result, "flow", $this->flow);
        $result= Generator::addScalarToArrayIfNotNull($result, "authorizationUrl", $this->authorizationUrl);
        $result= Generator::addScalarToArrayIfNotNull($result, "tokenUrl", $this->tokenUrl);
        $result= Generator::addGeneratableToArrayIfNotEmpty($result, "scopes", $this->scopes);

        return $result;
    }

    /**
     * @return string
     */
    public function getFlow()
    {
        return $this->flow;
    }

    /**
     * @param string $flow
     * @return $this
     */
    public function setFlow($flow)
    {
        $this->flow = $flow;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationUrl()
    {
        return $this->authorizationUrl;
    }

    /**
     * @param string $authorizationUrl
     * @return $this
     */
    public function setAuthorizationUrl($authorizationUrl)
    {
        $this->authorizationUrl = $authorizationUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getTokenUrl()
    {
        return $this->tokenUrl;
    }

    /**
     * @param string $tokenUrl
     * @return $this
     */
    public function setTokenUrl($tokenUrl)
    {
        $this->tokenUrl = $tokenUrl;

        return $this;
    }

    /**
     * @return \WoohooLabs\SpecGenerator\Swagger2\Security\ScopesInterface
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Security\ScopesInterface $scopes
     * @return $this
     */
    public function setScopes(ScopesInterface $scopes)
    {
        $this->scopes = $scopes;

        return $this;
    }
}
