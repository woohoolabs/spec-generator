<?php
namespace WoohooLabs\SpecGenerator\Swagger2;

class SecurityCodes
{
    const API_KEY_IN_HEADER= "header";
    const API_KEY_IN_QUERY= "query";

    const OAUTH2_FLOW_IMPLICIT= "implicit";
    const OAUTH2_FLOW_PASSWORD= "password";
    const OAUTH2_FLOW_APPLICATION= "application";
    const OAUTH2_FLOW_ACCESS_CODE= "accessCode";
}
