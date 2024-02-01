<?php

namespace MollieRestApiClient\Exceptions;

use Exception;

/**
 * Class ForbiddenException
 * @package MollieRestApiClient\Exceptions
 */
class ForbiddenException extends Exception
{

	/*** @var string */
	protected $message = 'Forbidden (403)';

}