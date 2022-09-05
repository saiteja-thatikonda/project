<?php

namespace Assignment\Category\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    protected $storeManager;

    protected $categoryFactory;

    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory
    ) {
        $this->storeManager = $storeManager;
        $this->categoryFactory = $categoryFactory;
    }


    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $this->createCategory();
    }

    public function createCategory()
    {

        $categoryName = 'Gadget';           //category name

        $parentId = $this->storeManager->getStore()->getRootCategoryId();           //getting the current store root category
        $parentCategory = $this->categoryFactory->create()->load($parentId);

        $category = $this->categoryFactory->create();    //category create


        $getcategory = $category->getCollection()          //get the category if exists in list using filter
            ->addAttributeToFilter('name', $categoryName)
            ->getFirstItem();


        if (!$getcategory->getId()) {                   //check category is present in list , if not add it to the category list
            $category->setPath($parentCategory->getPath())
                ->setParentId($parentId)                //setiing  parent id  to the category
                ->setName($categoryName)                // set that category name
                ->setIsActive(true);                    // active the category
            $category->save();                          // save the category
        }

    }
}
