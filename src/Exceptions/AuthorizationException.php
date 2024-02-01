<?php

namespace MollieRestApiClient\Exceptions;

use Exception;

/**
 * Class AuthorizationException
 * @package MollieRestApiClient\Exceptions
 */
class AuthorizationException extends Exception
{
	/*** @var string */
	protected $message = 'Authorization was failed';

}