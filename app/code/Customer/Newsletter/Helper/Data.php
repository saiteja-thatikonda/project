<?php

namespace Customer\Newsletter\Helper;

use Magento\Customer\Model\Session;


class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const XML_PATH_EMAIL_DEMO = 'emaildemo/email/email_demo_template';

    protected $_inlineTranslation;

    protected $_transportBuilder;

    protected $_template;

    protected $_storeManager;

    /**
     * @param Magento\Framework\App\Helper\Context              $context
     * @param Magento\Framework\Translate\Inline\StateInterface $inlineTranslation
     * @param Magento\Framework\Mail\Template\TransportBuilder  $transportBuilder
     * @param Magento\Store\Model\StoreManagerInterface         $storeManager
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation,
        \Webkul\EmailDemo\Model\Mail\TransportBuilder $transportBuilder,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) 
    {
        $this->_objectManager = $objectManager;
        parent::__construct($context);
        $this->_inlineTranslation = $inlineTranslation;
        $this->_transportBuilder = $transportBuilder;
        $this->_storeManager = $storeManager;
    }

  
    public function generateTemplate()
    {
        $pdfFile = '/var/www/html/244magento/app/code/Customer/Newsletter/Helper/invoice3.pdf/invoice3.pdf';

        $emailTemplateVariables['message'] = 'This is a test message.';
        //load your email tempate
        $this->_template  = $this->scopeConfig->getValue(
            self::XML_PATH_EMAIL_DEMO,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->_storeManager->getStore()->getStoreId()
        );
        $this->_inlineTranslation->suspend();

        $this->_transportBuilder->setTemplateIdentifier($this->_template)
                ->setTemplateOptions(
                    [
                        'area' => \Magento\Framework\App\Area::AREA_FRONTEND,
                        'store' => $this->_storeManager->getStore()->getId(),
                    ]
                )
                ->setTemplateVars($emailTemplateVariables)
                ->setFrom([
                    'name' => 'MyName',
                    'email' => 'tvsaiteja1661@gmail.com',
                ])
                ->addTo('tvsaiteja1661.com', 'sai teja')
                ->addAttachment(file_get_contents($pdfFile)); //Attachment goes here.

        try {
            $transport = $this->_transportBuilder->getTransport();
            $transport->sendMessage();
            $this->_inlineTranslation->resume();
        } catch (\Exception $e) {
            echo $e->getMessage(); die;
        }
    }
