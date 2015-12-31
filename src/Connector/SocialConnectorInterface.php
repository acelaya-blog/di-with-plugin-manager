<?php
namespace Acelaya\Social\Connector;

interface SocialConnectorInterface
{
    /**
     * @return string
     */
    public function getLoginUrl();

    /**
     * @return array
     */
    public function getUserData($authToken);
}
