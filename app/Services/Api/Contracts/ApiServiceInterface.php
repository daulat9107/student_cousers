<?php

namespace Inurture\Services\Api\Contracts;


interface ApiServiceInterface
{
	public function connector($url);
	public function parser();
}