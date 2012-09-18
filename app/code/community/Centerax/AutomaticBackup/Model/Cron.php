<?php

/**
 * Cron model
 *
 * @category    Centerax
 * @package     Centerax_AutomaticBackup
 * @author      Centerax <cx@pablobenitez.com>
 */

class Centerax_AutomaticBackup_Model_Cron
{
	public function backup($cron = null)
	{
        try {

            $backupDb = Mage::getModel('backup/db');
            $backup   = Mage::getModel('backup/backup')
                ->setTime(time())
                ->setType('db')
                ->setPath(Mage::getBaseDir("var") . DS . "backups");

            $backupDb->createBackup($backup);

			return Mage::helper('autobackup')->__('Backup successfully created');

        } catch (Exception  $e) {
            Mage::logException($e);
        }

        return $this;
	}
}