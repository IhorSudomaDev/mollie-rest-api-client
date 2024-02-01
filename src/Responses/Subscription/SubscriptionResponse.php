<?php

namespace MollieRestApiClient\Responses\Subscription;

use MollieRestApiClient\Responses\Abstracts\ASingleResponse;
use MollieRestApiClient\ValueObjects\Model;

/**
 * Class SubscriptionResponse
 * @package MollieRestApiClient\Responses\Subscription
 */
class SubscriptionResponse extends ASingleResponse
{
	/*** @var string */
	protected string $modelClass = Model::SUBSCRIPTION;
}