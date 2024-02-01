<?php

namespace MollieRestApiClient\Responses\Mandate;

use MollieRestApiClient\Responses\Abstracts\ASingleResponse;
use MollieRestApiClient\ValueObjects\Model;

/**
 * Class MandateResponse
 * @package MollieRestApiClient\Responses\Mandate
 */
class MandateResponse extends ASingleResponse
{
	/*** @var string */
	protected string $modelClass = Model::MANDATE;
}