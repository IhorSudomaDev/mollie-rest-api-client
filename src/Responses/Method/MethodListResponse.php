<?php

namespace MollieRestApiClient\Responses\Method;

use MollieRestApiClient\Responses\Abstracts\AListResponse;
use MollieRestApiClient\ValueObjects\Model;

/**
 * Class MethodListResponse
 * @package MollieRestApiClient\Responses\Method
 */
class MethodListResponse extends AListResponse
{
	/*** @var string */
	protected string $modelClass = Model::METHOD;
}