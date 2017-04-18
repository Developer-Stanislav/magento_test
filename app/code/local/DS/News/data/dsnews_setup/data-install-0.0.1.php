<?php
/**
 * @author Stanislav Dergunov <developer.stanislav@gmail.com>
 * @copyright Copyright (c) 2017, Stanislav Dergunov
 */

$data = array(
    array('News 1', 'News 1 Content', '2013-10-16 17:45'),
    array('News 2', 'News 2 Content', '2013-11-07 04:12'),
    array('News 3', 'News 3 Content', '2014-01-12 15:55'),
);

foreach ($data as $item){
    $model = Mage::getModel('dsnews/news');
    $model->setTitle($item[0]);
    $model->setContent($item[1]);
    $model->setCreated($item[2]);

    try {
        $model->save();
    } catch (Exception $e) {
        Mage::logException($e);
    }
}
