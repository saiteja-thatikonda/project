<?php

namespace Assignment\Category\Plugin\Catalog\Model;
class Productname
{
    
     
        
        public function __construct
        ( \Magento\Framework\Registry $registry, array $data = [] ) 
        
        { $this->_registry = $registry; } 
        
        public function getCurrentCategory() 
        { 
        return $this->_registry->registry('current_category'); 
        } 
        
        public function afterGetName(\Magento\Catalog\Model\Product $subject, $name) 
        {
         
         $getcat= $this->getCurrentCategory(); 
         return $getcat->getName(). "-" .$name;
        
        }        
       
    

}



















