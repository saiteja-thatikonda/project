<?php
namespace I95dev\Interface\Controller\Index;

use I95dev\Interface\Api\TestRepositoryInterface;

class Delete extends Action

{

    protected $_testReporitory;

    public function __construct(

        Context $context,

        TestRepositoryInterface $testReporitory

    ) {

        $this->_testReporitory = $testReporitory;

        parent::__construct(

            $context

        );

    }

    public function execute()

    {

        try {

            $testId = 10;//any id

            $this->_testReporitory->deleteById($testId);

        } catch (\Exception $e) {

            $this->messageManager->addException($e, $e->getMessage());

        }

    }

}
