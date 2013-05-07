<?php

/**
 * Magento Maps by Frozenminds
 *
 * @link        https://github.com/frozenminds/mage-maps
 * @package     Frozenminds_Maps_Helper
 * @copyright   Copyright (c) 2013 Frozenminds (http://frozenminds.com)
 * @license     http://opensource.org/licenses/MIT MIT License
 * @author      Constantin Bejenaru <boby@frozenminds.com>
 */

/**
 * Maps helper
 *
 * @link        https://github.com/frozenminds/mage-maps
 * @package     Frozenminds_Maps_Helper
 * @copyright   Copyright (c) 2013 Frozenminds (http://frozenminds.com)
 * @license     http://opensource.org/licenses/MIT MIT License
 * @author      Constantin Bejenaru <boby@frozenminds.com>
 */
class Frozenminds_Maps_Helper_Maps extends Mage_Core_Helper_Abstract
{

    /**
     * Get Google Maps helper
     *
     * @return Frozenminds_Maps_Helper_Maps_Google
     */
    public function google()
    {
        return Mage::helper('frozenminds_maps/maps_google');
    }

}
