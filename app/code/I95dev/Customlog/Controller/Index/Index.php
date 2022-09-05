<?php
namespace I95dev\Customlog\Controller\Index;

use Magento\Backend\App\Action\Context;
use \Magento\Framework\Controller\ResultFactory;


class Index extends \Magento\Framework\App\Action\Action
{
	
   
    protected $_cacheTypeList;

  
    protected $_cacheState;

  
    protected $_cacheFrontendPool;


    protected $resultPageFactory;
	
    
    protected $_logger;
	
	

    public function __construct(
       \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList,
        \Magento\Framework\App\Cache\StateInterface $cacheState,
        \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool,
        \Magento\Framework\Message\ManagerInterface $messageManager,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
	\I95dev\Customlog\Logger\Logger $logger
		
    ) {
        parent::__construct($context);
        $this->_cacheTypeList = $cacheTypeList;
        $this->_cacheState = $cacheState;
        $this->_cacheFrontendPool = $cacheFrontendPool;
        $this->resultPageFactory = $resultPageFactory;
        $this->_messageManager = $messageManager;
	$this->_logger = $logger;
				
     }
    
    /**
     * Flush cache storage
     *
     */
    public function execute()
    {
		
$this->_logger->info("I95dev created  custom module for Custom Log");
		
$this->resultPage = $this->resultPageFactory->create();  
        return $this->resultPage;
    }
}
