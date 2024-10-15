<?php

$this->addAttribute('customer', 'is_customer_blocked', array(
    'type'      => 'varchar',
    'label'     => 'Bloquear cliente',
    'input'     => 'text',
    'position'  => 120,
    'required'  => false, //or true
    'is_system' => 0,
));
$attribute = Mage::getSingleton('eav/config')->getAttribute('customer', 'is_customer_blocked');
$attribute->setData('used_in_forms', array(
    'adminhtml_customer',
    'checkout_register',
    'customer_account_create',
    'customer_account_edit',
));
$attribute->setData('is_user_defined', 0);
$attribute->save();