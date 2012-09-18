<?php

/**
 * CLI backuper
 *
 * @category    Centerax
 * @package     Centerax_AutomaticBackup
 * @author      Centerax <cx@pablobenitez.com>
 */

require 'app/Mage.php';

if (!Mage::isInstalled()) {
    echo "Application is not installed yet, please complete install wizard first.";
    die;
}

Mage::app();

try {
	Mage::getModel('autobackup/cron')->backup();
} catch (Exception $e) {
    Mage::printException($e);
}