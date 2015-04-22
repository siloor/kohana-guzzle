<?php
/**
 * Test case for GuzzleClient
 * 
 * @package     Kohana/Guzzle
 * @group       kohana
 * @group       kohana.guzzle
 * @category    Base
 * @author      Milan Magyar <milan.magyar@gmail.com>
 * @copyright   (c) 2015 Milan Magyar
 * @license     MIT
 */
class Kohana_GuzzleClientTest extends Kohana_Unittest_TestCase
{
	/**
	 * Test for GuzzleClient class factory method.
	 *
	 * @test
	 * @covers GuzzleClient::factory
	 */
	public function test_construction()
	{
		$client = GuzzleClient::factory();
		
		$this->assertEquals('GuzzleHttp\Client', get_class($client));
	}
}
