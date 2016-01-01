<?php
namespace Acelaya\Social;

use Acelaya\Social\Connector\SocialConnectorInterface;
use Acelaya\Social\Exception\InvalidSocialNetworkException;

class SocialUsers
{
    /**
     * @var SocialPluginManagerInterface
     */
    protected $socialPlugins;

    public function __construct(SocialPluginManagerInterface $socialPlugins)
    {
        $this->socialPlugins = $socialPlugins;
    }

    /**
     * @param $socialNetwork
     * @return string
     * @throws InvalidSocialNetworkException
     */
    public function getLoginUrl($socialNetwork)
    {
        return $this->getSocialConnector($socialNetwork)->getLoginUrl();
    }

    /**
     * @param $socialNetwork
     * @param $authToken
     * @return array
     * @throws InvalidSocialNetworkException
     */
    public function getUserData($socialNetwork, $authToken)
    {
        return $this->getSocialConnector($socialNetwork)->getUserData($authToken);
    }

    /**
     * @param $socialNetwork
     * @return SocialConnectorInterface
     * @throws InvalidSocialNetworkException
     */
    protected function getSocialConnector($socialNetwork)
    {
        if (! $this->socialPlugins->has($socialNetwork)) {
            throw new InvalidSocialNetworkException($socialNetwork);
        }

        return $this->socialPlugins->get($socialNetwork);
    }
}
