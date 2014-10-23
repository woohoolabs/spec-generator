<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Security;

use WoohooLabs\SpecGenerator\Utilities\Generator;

class Oauth2SecurityScheme extends AbstractSecurityScheme
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
     * @var \WoohooLabs\SpecGenerator\Swagger2\Security\Scopes
     */
    private $scopes;

    /**
     * @param string $flow
     * @param string $authorizationUrl
     * @param string $tokenUrl
     * @param \WoohooLabs\SpecGenerator\Swagger2\Security\Scopes $scopes
     */
    public function __construct($flow = null, $authorizationUrl = null, $tokenUrl = null, Scopes $scopes = null)
    {
        parent::__construct("oauth2");
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

        $result= Generator::addItemToArrayIfNotEmpty($result, "description", $this->getDescription());
        $result= Generator::addItemToArrayIfNotEmpty($result, "flow", $this->flow);
        $result= Generator::addItemToArrayIfNotEmpty($result, "authorizationUrl", $this->authorizationUrl);
        $result= Generator::addItemToArrayIfNotEmpty($result, "tokenUrl", $this->tokenUrl);
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
     * @return \WoohooLabs\SpecGenerator\Swagger2\Security\Scopes
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * @param \WoohooLabs\SpecGenerator\Swagger2\Security\Scopes $scopes
     * @return $this
     */
    public function setScopes(Scopes $scopes)
    {
        $this->scopes = $scopes;

        return $this;
    }
}
