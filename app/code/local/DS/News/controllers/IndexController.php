<?php

/**
 * @author Stanislav Dergunov <developer.stanislav@gmail.com>
 * @copyright Copyright (c) 2017, Stanislav Dergunov
 */
class DS_News_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function viewAction()
    {
        $newsId = Mage::app()->getRequest()->getParam('id', 0);
        $news = Mage::getModel('dsnews/news')->load($newsId);

        if ($news->getId() > 0) {
            $this->loadLayout();
            $this->getLayout()->getBlock('news.content')->assign(
                array("news" => $news)
            );
            $this->renderLayout();
        } else {
            $this->_forward('noRoute');
        }
    }
}
