<?php
/**
 * Local server specific configurations
 * 
 * @created             1-August-2014
 * @created by          Dilum
 * @type                testing
 * @version             1.0
 * @last modified       1-Ausust-2014
 * @last modified by    Dilum
 */

defined('DS') or define('DS', DIRECTORY_SEPARATOR);

// change the following paths if necessary
chdir (realpath (__DIR__ .DS.'..'.DS.'..'.DS.'..'.DS.'..'.DS)); 

$yiit = 'vendor'.DS.'yiisoft'.DS.'yii'.DS.'framework'.DS.'yiit.php';
$config = 'protected'.DS.'config'.DS.'local'.DS.'tests'.DS.'config.php';

require_once ($yiit);
require_once ('.'.DS.'tests'.DS.'DbTestCase.php');
require_once ('.'.DS.'tests'.DS.'TestCase.php');
require_once ('.'.DS.'tests'.DS.'WebTestCase.php');

Yii::setPathOfAlias ('application.tests.fixtures', '.'.DS.'tests'.DS.'fixtures');

Yii::createWebApplication ($config);
