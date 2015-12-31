<?php
namespace Acelaya\Social\Connector;

class FacebookConnector implements SocialConnectorInterface
{
    /**
     * @return string
     */
    public function getLoginUrl()
    {
        return 'facebook';
    }

    /**
     * @return array
     */
    public function getUserData($authToken)
    {
        return [
            'network' => 'facebook',
            'username' => 'foo'
        ];
    }
}
