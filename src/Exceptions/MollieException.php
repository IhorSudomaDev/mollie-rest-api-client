<?php

namespace MollieRestApiClient\Exceptions;

use Exception;

/**
 * Class MollieException
 * @property int    $code
 * @property string $message
 * @package MollieRestApiClient\Exceptions
 */
class MollieException extends Exception
{
	/**
	 * @param string $message
	 * @param int    $code
	 */
	public function __construct(string $message, int $code = 0)
	{
		parent::__construct($message, $code);
	}

}