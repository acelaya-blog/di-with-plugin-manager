<?php
namespace Acelaya\Social\Connector;

class LinkedinConnector implements SocialConnectorInterface
{
    /**
     * @return string
     */
    public function getLoginUrl()
    {
        return 'linkedin';
    }

    /**
     * @return array
     */
    public function getUserData($authToken)
    {
        return [
            'network' => 'linkedin',
            'username' => 'foo'
        ];
    }
}
