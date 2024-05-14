<?php

namespace MollieRestApiClient\Requests\Subscription;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Subscription\SubscriptionListResponse;
use MollieRestApiClient\Traits\WithCustomerIdPrefix;
use MollieRestApiClient\Traits\WithPagination;
use MollieRestApiClient\Traits\WithProfileIdPrefix;
use MollieRestApiClient\Traits\WithSubscriptionIdPrefix;
use MollieRestApiClient\Traits\WithTestMode;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class GetSubscriptionPaymentListRequest
 * @package MollieRestApiClient\Requests\Subscription
 */
class GetSubscriptionPaymentListRequest extends ARequest
{
	use WithCustomerIdPrefix, WithSubscriptionIdPrefix, WithProfileIdPrefix, WithPagination, WithTestMode;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::SUBSCRIPTIONS_PAYMENTS;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_GET;
	/*** @var string */
	protected string $responseClass = SubscriptionListResponse::class;
	/*** @var array */
	protected array $availableInputParameters = [];

	/**
	 * @param string $accessToken
	 * @param string $customerId
	 * @param string $subscriptionId
	 */
	public function __construct(string $accessToken, string $customerId, string $subscriptionId)
	{
		parent::__construct($accessToken);
		$this->checkCustomerIdPrefix($customerId);
		$this->setCustomerId($customerId);
		$this->checkSubscriptionIdPrefix($subscriptionId);
		$this->setSubscriptionId($subscriptionId);
	}

	/*** @param string $profileId */
	private function withProfileId(string $profileId): void
	{
		$this->availableInputParameters['profileId'] = $profileId;
	}

	/**
	 * @param string $profileId
	 * @return $this
	 */
	public function withFrom(string $profileId): self
	{
		$this->availableInputParameters['from'] = $profileId;
		return $this;
	}

	/**
	 * @param int $limit
	 * @return $this
	 */
	public function withLimit(int $limit): self
	{
		$this->checkLimit($limit);
		$this->availableInputParameters['limit'] = $limit;
		return $this;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), $this->getCustomerId());
	}
}