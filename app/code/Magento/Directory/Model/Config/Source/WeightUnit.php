<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Directory\Model\Config\Source;

/**
 * Options provider for weight units list
 *
 * @api
 */
class WeightUnit implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return [['value' => 'lbs', 'label' => __('lbs')], ['value' => 'kgs', 'label' => __('kgs')]];
    }
}
