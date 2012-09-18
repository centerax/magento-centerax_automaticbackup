Automatic DB Backups
================================

With this extension you wont have to worry about backing up your database or using external scripts, tools to do so.
You just need Magento's cron up and running, and this module will do the rest.
You can find more information on how to setup Magento's cron jobs here: http://www.magentocommerce.com/wiki/how_to/how_to_setup_a_cron_job

The module creates a backup of your database every day at 1AM, the backup is saved on Magento's backup list, that you can find under, System > Tools > Backups
Also, along with this feature, you will find a file called: "centerax_db_backup.php", with this file you can create a backup of the database from the command line by executing this: "/absolute/path/to/bin/php -f /absolute/path/to/magento/centerax_db_backup.php"
You will find these backups on the Magento's backup list also.
In order to change when the module creates a backup you must edit this file: "app/code/community/Centerax/AutomaticBackup/etc/config.xml" on line 34. For example, if you want backups every week (every monday at 1am), you should change: "0 1 * * *" to "* 1 * * 1"

You can find more information on cron expressions here: http://www.cyberciti.biz/faq/how-do-i-add-jobs-to-cron-under-linux-or-unix-oses/
