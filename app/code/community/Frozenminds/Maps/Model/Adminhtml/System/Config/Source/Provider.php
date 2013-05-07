<?php

/**
 * Magento Maps by Frozenminds
 *
 * @link        https://github.com/frozenminds/mage-maps
 * @package     Frozenminds_Maps_Model_Adminhtml_System_Config_Source
 * @copyright   Copyright (c) 2013 Frozenminds (http://frozenminds.com)
 * @license     http://opensource.org/licenses/MIT MIT License
 * @author      Constantin Bejenaru <boby@frozenminds.com>
 */

/**
 * Source for maps provider
 *
 * @package     Frozenminds_Maps_Model_Adminhtml_System_Config_Source
 * @copyright   Copyright (c) 2013 Frozenminds (http://frozenminds.com)
 * @author      Constantin Bejenaru <boby@frozenminds.com>
 */
class Frozenminds_Maps_Model_Adminhtml_System_Config_Source_Provider
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'google-maps',
                'label' => Mage::helper('frozenminds_maps')->__('Google Maps')
            )
        );
    }

}
