<?php

/**
 * @author Stanislav Dergunov <developer.stanislav@gmail.com>
 * @copyright Copyright (c) 2017, Stanislav Dergunov
 */
class DS_News_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        $news = Mage::getModel('dsnews/news')->getCollection()->setOrder('created', 'DESC');
        $viewUrl = Mage::getUrl('news/index/view');

        Mage::register('news', $news);
        Mage::register('url_view', $viewUrl);

        $this->loadLayout();
        $this->renderLayout();
    }

    public function viewAction()
    {
        $newsId = Mage::app()->getRequest()->getParam('id', 0);
        $news = Mage::getModel('dsnews/news')->load($newsId);

        if ($news->getId() > 0) {
            Mage::register('url_return',  Mage::getUrl('news'));
            Mage::register('news', $news);

            $this->loadLayout();
            $this->renderLayout();

        } else {
            $this->_forward('noRoute');
        }
    }



}