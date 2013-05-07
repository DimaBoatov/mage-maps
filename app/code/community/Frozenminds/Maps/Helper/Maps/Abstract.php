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
 * Abstract maps helper
 *
 * @link        https://github.com/frozenminds/mage-maps
 * @package     Frozenminds_Maps_Helper_Maps
 * @copyright   Copyright (c) 2013 Frozenminds (http://frozenminds.com)
 * @license     http://opensource.org/licenses/MIT MIT License
 * @author      Constantin Bejenaru <boby@frozenminds.com>
 */
abstract class Frozenminds_Maps_Helper_Maps_Abstract
extends Mage_Core_Helper_Abstract
{

    /**
     * Get URI to Maps API
     *
     * @return string
     */
    abstract public function getUri();

    /**
     * Get current URI scheme of Magento
     *
     * @return string
     */
    public function getUriScheme()
    {
        return Mage::app()->getStore()->isCurrentlySecure() ? 'https' : 'http';
    }

}
