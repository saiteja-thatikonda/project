<?php
namespace I95dev\Mvvm\ViewModel;


class Custom implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    public function __construct() {

    }
    public function getSomething() {
        return "Hello world i95dev";
    }
}
