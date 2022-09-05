<?php
declare(strict_types=1);

namespace I95dev\Menu\Controller\Adminhtml\Index;

class Index extends \Magento\Backend\App\Action
{

    protected $resultPageFactory;

    /**
     * Constructor
     *
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * Index action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('custom menu::top_level');
        $resultPage->addBreadcrumb(__('custom menu'), __('custom menu'));
        $resultPage->addBreadcrumb(__('custom menu'), __('custom menu'));
        $resultPage->getConfig()->getTitle()->prepend(__("custom menu"));
        return $resultPage;
    }
}
