<?php
/**
 * @author Stanislav Dergunov <developer.stanislav@gmail.com>
 * @copyright Copyright (c) 2017, Stanislav Dergunov
 */
class DS_News_Block_News extends Mage_Core_Block_Template
{
    public function getNewsCollection()
    {
        return Mage::getModel('dsnews/news')->getCollection()->setOrder('created', 'DESC');
    }

}