<?php
/**
 * @author Stanislav Dergunov <developer.stanislav@gmail.com>
 * @copyright Copyright (c) 2017, Stanislav Dergunov
 */
class DS_News_Block_Adminhtml_News extends Mage_Adminhtml_Block_Widget_Grid_Container{
    protected function _construct()
    {
        parent::_construct();

        $helper = Mage::helper('ds_news');
        $this->_blockGroup = 'dsnews';
        $this->_controller = 'adminhtml_news';

        $this->_headerText = $helper->__('News Management');
        $this->_addButtonLabel = $helper->__('Add News');
    }
}