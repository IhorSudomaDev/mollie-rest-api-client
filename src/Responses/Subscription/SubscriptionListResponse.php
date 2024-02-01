<?php

namespace MollieRestApiClient\Responses\Subscription;

use MollieRestApiClient\Responses\Abstracts\AListResponse;
use MollieRestApiClient\ValueObjects\Model;

/**
 * Class SubscriptionListResponse
 * @package MollieRestApiClient\Responses\Subscription
 */
class SubscriptionListResponse extends AListResponse
{
	/*** @var string */
	protected string $modelClass = Model::SUBSCRIPTION;
}