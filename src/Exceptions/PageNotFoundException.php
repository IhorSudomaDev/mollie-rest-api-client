<?php

namespace MollieRestApiClient\Exceptions;

use Exception;

/**
 * Class PageNotFoundException
 * @package MollieRestApiClient\Exceptions
 */
class PageNotFoundException extends Exception
{
	/*** @var string */
	protected $message = 'Page Not Found';
}