<?php

namespace MollieRestApiClient\Exceptions;

use Exception;

/**
 * Class ResourceNotFoundException
 * @property int    $code
 * @property string $message
 * @package MollieRestApiClient\Exceptions
 */
class ResourceNotFoundException extends Exception
{
	/***
	 * @param string $message
	 * @param int    $code
	 */
	public function __construct(string $message, int $code)
	{
		parent::__construct($message, $code);
	}
}