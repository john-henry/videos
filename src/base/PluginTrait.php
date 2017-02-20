<?php
/**
 * @link      https://dukt.net/craft/videos/
 * @copyright Copyright (c) 2017, Dukt
 * @license   https://dukt.net/craft/videos/docs/license
 */

namespace dukt\videos\base;

use dukt\videos\Plugin as Videos;

trait PluginTrait
{
    /**
     * Returns the videos service.
     *
     * @return \dukt\videos\services\Videos The videos service
     */
    public function getVideos()
    {
        /** @var Videos $this */
        return $this->get('videos');
    }

    /**
     * Returns the cache service.
     *
     * @return \dukt\videos\services\Cache The cache service
     */
    public function getCache()
    {
        /** @var Videos $this */
        return $this->get('cache');
    }

    /**
     * Returns the gateways service.
     *
     * @return \dukt\videos\services\Gateways The gateways service
     */
    public function getGateways()
    {
        /** @var Videos $this */
        return $this->get('gateways');
    }

    /**
     * Returns the oauth service.
     *
     * @return \dukt\videos\services\Oauth The oauth service
     */
    public function getOauth()
    {
        /** @var Videos $this */
        return $this->get('oauth');
    }
}