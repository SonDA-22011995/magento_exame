<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Sale\BigSale\Model\Attribute\Source;

class Material extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * Get all options
     * @return array
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [             
                ['label' => __('Yes'), 'value' =>'Sale up to 60%'],
                ['label' => __('No'), 'value' => 'No available'],
            ];
        }
        return $this->_options;
    }
}
