<?php
declare(strict_types=1);

namespace I95dev\Acl\Controller\Adminhtml\Create\Index;






abstract class Index extends \Magento\Backend\App\Action
{
 
const ADMIN_RESOURCE = 'I95dev_Acl::create';
 protected function _isAllowed()
{
 return $this->_authorization->isAllowed('Magento_Customer::manage');
}
}
