<?php

/**
 * Customized the Export script of Contacts
 * Developer: Ruvin Roshan (c) - 2018
 */

if (!defined('sugarEntry') || !sugarEntry) {
	die('Not A Valid Entry Point');
}

unset($GLOBALS['beanFiles']['Contact']);
$GLOBALS['beanFiles']['Contact'] = 'custom/modules/Contacts/Contact.php';
