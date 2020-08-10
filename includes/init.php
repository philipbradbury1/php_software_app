<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);


define('SITE_ROOT', dirname(__DIR__));


require_once(SITE_ROOT.DS.'includes'.DS.'database_configuration.php');
require_once(SITE_ROOT.DS.'includes'.DS.'database.php');
require_once(SITE_ROOT.DS.'includes'.DS.'main.php');
require_once(SITE_ROOT.DS.'includes'.DS.'user.php');
require_once(SITE_ROOT.DS.'includes'.DS.'customer.php');
require_once(SITE_ROOT.DS.'includes'.DS.'vehicle.php');
require_once(SITE_ROOT.DS.'includes'.DS.'job.php');
require_once(SITE_ROOT.DS.'includes'.DS.'ValidationSet.php');

require_once(SITE_ROOT.DS.'includes'.DS.'session.php');
require_once(SITE_ROOT.DS.'includes'.DS.'functions.php');

?>