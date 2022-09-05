<?php

namespace Sai\Teja\Model\Config;

use Magento\Framework\Option\ArrayInterface;

class Options implements ArrayInterface
{
    public function toOptionArray()
    {

        $options = [];
        $options[] = [
            'value' => 'info',
            'label' => 'info',
        ];
        $options[] = [
            'value' => 'system',
            'label' => 'system',
        ];
         $options[] = [
            'value' => 'debug',
            'label' => 'debug',
        ];
         $options[] = [
            'value' => 'exception',
            'label' => 'exception',
        ];

        return $options;
    }
}
