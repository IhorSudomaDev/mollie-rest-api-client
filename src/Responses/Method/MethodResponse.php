<?php

namespace MollieRestApiClient\Responses\Method;

use MollieRestApiClient\Responses\Abstracts\ASingleResponse;
use MollieRestApiClient\ValueObjects\Model;

/**
 * Class MethodResponse
 * @package MollieRestApiClient\Responses\Method
 */
class MethodResponse extends ASingleResponse
{
	/*** @var string */
	protected string $modelClass = Model::METHOD;
}