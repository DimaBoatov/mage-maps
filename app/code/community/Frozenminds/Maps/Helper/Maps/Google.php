<?php

/**
 * Magento Maps by Frozenminds
 *
 * @link        https://github.com/frozenminds/mage-maps
 * @package     Frozenminds_Maps_Helper_Maps
 * @copyright   Copyright (c) 2013 Frozenminds (http://frozenminds.com)
 * @license     http://opensource.org/licenses/MIT MIT License
 * @author      Constantin Bejenaru <boby@frozenminds.com>
 */

/**
 * Google Maps helper
 *
 * @link        https://github.com/frozenminds/mage-maps
 * @package     Frozenminds_Maps_Helper
 * @copyright   Copyright (c) 2013 Frozenminds (http://frozenminds.com)
 * @license     http://opensource.org/licenses/MIT MIT License
 * @author      Constantin Bejenaru <boby@frozenminds.com>
 */
class Frozenminds_Maps_Helper_Maps_Google extends Frozenminds_Maps_Helper_Maps_Abstract
{

    const URI_MAPS_HOST = 'maps.googleapis.com';
    const URI_MAPS_PATH = '/maps/api/js';

    /**
     * Get URI to Google Maps Javascript API
     *
     * @return string
     */
    public function getUri()
    {
        $uri = Zend_Uri::factory(
            $this->getUriScheme()
        );
        $uri->setHost(self::URI_MAPS_HOST);
        $uri->setPath(self::URI_MAPS_PATH);

        $uri->setQuery(
            array(
                'key' => $this->getApiKey(),
                'sensor' => 'false'
            )
        );

        return $uri->getUri();
    }

    /**
     * Return API key
     *
     * @return string
     */
    public function getApiKey()
    {
        return Mage::getStoreConfig('frozenminds_maps/google_maps/api_key');
    }

}

