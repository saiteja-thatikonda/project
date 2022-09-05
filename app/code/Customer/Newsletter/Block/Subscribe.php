<?php



namespace Customer\Newsletter\Block;

class Subscribe extends \Magento\Framework\View\Element\Template
{
    /**
     * Retrieve form action url and set "secure" param to avoid confirm
     * message when we submit form from secure page to unsecure
     *
     * @return string
     */
    public function getFormActionUrl()
    {
        return $this->getUrl('customer_newsletter/subscriber/new', ['_secure' => true]);
    }
}
