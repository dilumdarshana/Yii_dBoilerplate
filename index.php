<?php

defined('DS') or define('DS', DIRECTORY_SEPARATOR);
require_once (dirname(__FILE__).'/vendor/autoload.php');

// change the following paths if necessary
$yii = dirname(__FILE__).'/vendor/yiisoft/yii/framework/yii.php';

$configMain = require_once (dirname(__FILE__).'/protected/config/main.php');

// set confic file based on the development environment
$env = isset ($_SERVER['HOST_ENV']) ? $_SERVER['HOST_ENV'] : 'prod';

switch ($env)
{
	case 'local':
		$envirnment = 'local';
		break;
	case 'dev':
		$envirnment = 'dev';
		break;
	case 'elprod':
		$envirnment = 'elprod';
		break;
	case 'prod':
		$envirnment = 'prod';
		break;
}

$configServer = require_once (dirname(__FILE__).'/protected/config/'.$envirnment.'/main.php');

$config = array_merge_recursive ($configMain, $configServer);

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
