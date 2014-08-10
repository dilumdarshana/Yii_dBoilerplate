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

Yii::setPathOfAlias('serviceTypeConfig', realpath(dirname(__FILE__) . '/../../../../data/'));

return array(

	'basePath' => dirname(__FILE__) . '/../../../../',

	'import' => array(
		'application.models.*',
		'application.components.*',
		'application.components.Controllers.*',
		'application.components.Index.*',
		'application.components.service.*'
	),

	'components' => array(
	
		'db'=>array(
            'connectionString' => 'pgsql:host=192.168.1.51;dbname=octopus_core',
            'emulatePrepare' => true,
            'username' => 'postgres',
            'password' => 'iu',
            'charset' => 'utf8'
        ),
            
		'fixture' => array(
			'class' => 'system.test.CDbFixtureManager',
		),
		
		/*'cache'=>array(
	        'class' => 'CMemCache',
	        'servers' => array(
	            array(
	                'host' => '127.0.0.1',
	                'port' => 11211,
	                'weight' => 60
	            )
	        ),
	    )*/
	),

	'params' => array(
		
	)
);