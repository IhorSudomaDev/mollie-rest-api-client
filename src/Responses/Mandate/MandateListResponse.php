<?php

namespace MollieRestApiClient\Responses\Mandate;

use MollieRestApiClient\Responses\Abstracts\AListResponse;
use MollieRestApiClient\ValueObjects\Model;

/**
 * Class MandateListResponse
 * @package MollieRestApiClient\Responses\Mandate
 */
class MandateListResponse extends AListResponse
{
	/*** @var string */
	protected string $modelClass = Model::MANDATE;
}