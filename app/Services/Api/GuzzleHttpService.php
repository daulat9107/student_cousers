<?php
namespace Inurture\Services\Api;

use Inurture\Services\Api\Contracts\ApiServiceInterface;

use GuzzleHttp\Client;
/**
* 
*/
class GuzzleHttpService implements ApiServiceInterface
{
	protected $guzzle;
	protected $data;
	public function __construct(Client $guzzle)
	{
		$this->guzzle=$guzzle;
	}
	public function connector($url)
	{
		$res = $this->guzzle->request('GET', $url);
		$this->data= $res->getBody();
	}
	public function parser()
	{
		return json_decode($this->data,true)['elements'];
	}
}