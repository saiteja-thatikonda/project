<?php
namespace I95dev\Customajax\Block;
class Custom extends \Magento\Framework\View\Element\Template
{

protected function _prepareLayout()
{

      return parent ::_prepareLayout();
}

    

    
    public function getContentForDisplay()
    {

        return '/custompage/index/index';

    }
}

