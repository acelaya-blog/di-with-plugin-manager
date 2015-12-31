<?php
namespace Acelaya\Social;

use Acelaya\Social\Connector\SocialConnectorInterface;
use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\Exception;

class SocialPluginManager extends AbstractPluginManager
{
    /**
     * Validate the plugin
     *
     * Checks that the filter loaded is either a valid callback or an instance
     * of FilterInterface.
     *
     * @param  mixed $plugin
     * @return void
     * @throws Exception\RuntimeException if invalid
     */
    public function validatePlugin($plugin)
    {
        if ($plugin instanceof SocialConnectorInterface) {
            return;
        }

        throw new Exception\RuntimeException(sprintf(
            'Plugins managed by "%s" must implement "%s". "%s" provided',
            __CLASS__,
            SocialConnectorInterface::class,
            is_object($plugin) ? get_class($plugin) : gettype($plugin)
        ));
    }
}
