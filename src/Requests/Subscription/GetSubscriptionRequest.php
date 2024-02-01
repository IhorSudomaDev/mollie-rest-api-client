<?php

namespace MollieRestApiClient\Requests\Subscription;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Subscription\SubscriptionResponse;
use MollieRestApiClient\Traits\WithCustomerIdPrefix;
use MollieRestApiClient\Traits\WithSubscriptionIdPrefix;
use MollieRestApiClient\Traits\WithTestMode;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class GetSubscriptionRequest
 * @package MollieRestApiClient\Responses\Subscription
 */
class GetSubscriptionRequest extends ARequest
{
	use WithCustomerIdPrefix, WithSubscriptionIdPrefix, WithTestMode;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::SUBSCRIPTIONS_WITH_IDENTIFIERS;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_GET;
	/*** @var string */
	protected string $responseClass = SubscriptionResponse::class;

	/**
	 * @param string $accessToken
	 * @param string $customerId
	 * @param string $subscriptionId
	 */
	public function __construct(string $accessToken, string $customerId, string $subscriptionId)
	{
		parent::__construct($accessToken);
		$this->checkCustomerIdPrefix($customerId);
		$this->checkSubscriptionIdPrefix($subscriptionId);
		$this->setCustomerId($customerId);
		$this->setSubscriptionId($subscriptionId);
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), $this->getCustomerId(), $this->getSubscriptionId());
	}
}