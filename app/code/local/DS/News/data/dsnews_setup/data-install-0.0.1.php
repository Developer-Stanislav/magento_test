<?php
/**
 * @author Stanislav Dergunov <developer.stanislav@gmail.com>
 * @copyright Copyright (c) 2017, Stanislav Dergunov
 */

$data = array(
    array('News 1', 'News 1 Content update Data', 1, '2013-10-16 17:45'),
    array('News 2', 'News 2 Content update Data', 0, '2013-11-07 04:12'),
    array('News 3', 'News 3 Content update Data', 0, '2014-01-12 15:55'),
    array('News 4', 'News 4 Content update Data', 1, '2015-06-25 16:51'),
    array('News 5', 'News 5 Content update Data', 1, '2016-03-21 00:00'),
    array('News 6', 'News 6 Content update Data', 0, '2017-02-10 20:45'),
);

foreach ($data as $item) {
    $model = Mage::getModel('dsnews/news');
    $model->setTitle($item[0]);
    $model->setContent($item[1]);
    $model->setStatus($item[2]);
    $model->setCreated($item[3]);

    try {
        $model->save();
    } catch (Exception $e) {
        Mage::logException($e);
    }
}
