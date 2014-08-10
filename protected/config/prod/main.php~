<?php
/**
 * Production server specific configurations
 * 
 * @created             28-July-2014
 * @created by          Apache
 * @type                core
 * @version             1.0
 * @last modified       28-July-2014
 * @last modified by    Apache
 */

chdir (realpath(__DIR__ . '/../'));

// local envirenment specific params
$scope = require_once ('prod'.DS.'params.php');

return array(
					
		'components'=>array(  	
    		'db'=>array(
    			'connectionString' => 'pgsql:host=192.168.1.51;dbname=octopus_core',
    			'emulatePrepare' => true,
                'username' => 'postgres',
                'password' => 'iu',
                'charset' => 'utf8'
    		),

		'params' => $scope
        )
);
