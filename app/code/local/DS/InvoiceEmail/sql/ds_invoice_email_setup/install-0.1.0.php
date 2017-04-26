<?php
/**
 * @author Stanislav Dergunov <developer.stanislav@gmail.com>
 * @copyright Copyright (c) 2017, Stanislav Dergunov
 */
$this->startSetup();
$this->removeAttribute('customer', 'invoice_email');
$this->addAttribute('customer', 'invoice_email', array(
    'label' => 'Switch on invoice mails',
    'visible' => true,
    'required' => false,
    'position' => 511,
    'type' => 'int',
    'default' => false,
    'input' => 'boolean',
    'adminhtml_only' => '0'
));

Mage::getSingleton('eav/config')
    ->getAttribute('customer', 'invoice_email')
    ->setData('used_in_forms', array('adminhtml_customer', 'customer_account_edit'))
    ->save();

$this->endSetup();
