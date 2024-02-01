<?php

namespace MollieRestApiClient\Requests\Subscription;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Subscription\SubscriptionListResponse;
use MollieRestApiClient\Traits\WithCustomerIdPrefix;
use MollieRestApiClient\Traits\WithPagination;
use MollieRestApiClient\Traits\WithProfileIdPrefix;
use MollieRestApiClient\Traits\WithTestMode;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class GetSubscriptionListRequest
 * @package MollieRestApiClient\Requests\Subscription
 */
class GetSubscriptionListRequest extends ARequest
{
	use WithCustomerIdPrefix, WithProfileIdPrefix, WithPagination, WithTestMode;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::SUBSCRIPTIONS;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_GET;
	/*** @var string */
	protected string $responseClass = SubscriptionListResponse::class;
	/*** @var array */
	protected array $availableInputParameters = [];

	/**
	 * @param string $accessToken
	 * @param string $customerId
	 * @param string $profileId
	 */
	public function __construct(string $accessToken, string $customerId, string $profileId)
	{
		parent::__construct($accessToken);
		$this->checkCustomerIdPrefix($customerId);
		$this->setCustomerId($customerId);
		$this->checkProfileIdPrefix($profileId);
		$this->withProfileId($profileId);
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