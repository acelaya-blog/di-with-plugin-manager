<?php
namespace Acelaya\Social\Connector;

class TwitterConnector implements SocialConnectorInterface
{
    /**
     * @return string
     */
    public function getLoginUrl()
    {
        return 'twitter';
    }

    /**
     * @return array
     */
    public function getUserData($authToken)
    {
        return [
            'network' => 'twitter',
            'username' => 'foo'
        ];
    }
}
