<?php
/**
 * For functional testing
 * 
 * @created             1-August-2014
 * @created by          Dilum
 * @type                testing
 * @version             1.0
 * @last modified       1-Ausust-2014
 * @last modified by    Dilum
 */
 
define ('TEST_BASE_URL', 'http://octopus_core.site/index.php');

class WebTestCase extends CWebTestCase
{

	protected function setUp ()
	{
        $this->setBrowser ('*firefox');       
		$this->setBrowserUrl (TEST_BASE_URL);
		parent::setUp ();
	}
}
