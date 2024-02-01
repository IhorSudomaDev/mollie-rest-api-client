<?php

namespace MollieRestApiClient\Responses\Abstracts;

/**
 * Class AResponse
 * @package MollieRestApiClient\Responses\Abstracts
 */
abstract class AResponse
{
	/**
	 * @param $result
	 * @return mixed
	 */
	abstract public function get($result);
}