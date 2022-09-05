<?php
namespace I95dev\SendEmail\Observer;

use Magento\Framework\Event\ObserverInterface;
use I95dev\SendEmail\Helper\Email;


class CustomerLogin implements ObserverInterface
{
    private $helperEmail;
    
    public function __construct(
        Email $helperEmail
    ) {
        $this->helperEmail = $helperEmail;
    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        return $this->helperEmail->sendEmail();
    }
}
