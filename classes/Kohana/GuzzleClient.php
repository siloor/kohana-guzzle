<?php defined('SYSPATH') or die('No direct script access.');
/**
 * GuzzleClient
 * 
 * A Kohana 3.x module for using Guzzle, the PHP HTTP client.
 * 
 * @package     Kohana/Guzzle
 * @category    Base
 * @author      Milan Magyar <milan.magyar@gmail.com>
 * @copyright   (c) 2015 Milan Magyar
 * @license     MIT
 */
class Kohana_GuzzleClient
{
	/**
	 * Create a new Guzzle Client instance.
	 *
	 *     $client = GuzzleClient::factory([
	 *         'base_url' => [
	 *              'http://www.foo.com/{version}/',
	 *              ['version' => '123']
	 *          ],
	 *         'defaults' => [
	 *             'timeout'         => 10,
	 *             'allow_redirects' => false,
	 *             'proxy'           => '192.168.16.1:10'
	 *         ]
	 *     ]);
	 *
	 * @param array $config Client configuration settings
	 * @return  GuzzleHttp\Client
	 */
	public static function factory(array $config = [])
	{
		require_once(Kohana::find_file('vendor/guzzle/vendor', 'autoload'));
		
		return new GuzzleHttp\Client($config);
	}
}
