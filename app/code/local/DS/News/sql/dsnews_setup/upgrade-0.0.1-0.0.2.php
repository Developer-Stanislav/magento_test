<?php

$installer = $this;
$tableNews = $installer->getTable('dsnews/table_news');

$installer->startSetup();

$installer->getConnection()->addColumn($tableNews, 'status', array(
    'comment'   => 'Status',
    'default'   => '0',
    'nullable'  => false,
    'after'     => 'content',
    'type'      => Varien_Db_Ddl_Table::TYPE_INTEGER,
));

$installer->endSetup();
