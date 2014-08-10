<?php
/**
 * For unit testing
 * 
 * @created             1-August-2014
 * @created by          Dilum
 * @type                testing
 * @version             1.0
 * @last modified       1-Ausust-2014
 * @last modified by    Dilum
 */

Yii::setPathOfAlias('Guzzle', realpath(__DIR__ . '/../vendor/guzzle/guzzle/src/Guzzle'));

class TestCase extends CTestCase 
{

	public function setUp()
	{
        parent::setUp();
	}

}
