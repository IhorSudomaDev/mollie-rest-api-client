<?php

namespace MollieRestApiClient\Requests\Subscription;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Subscription\SubscriptionListResponse;
use MollieRestApiClient\Traits\WithPagination;
use MollieRestApiClient\Traits\WithTestMode;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class GetAllSubscriptionListRequest
 * @package MollieRestApiClient\Requests\Subscription
 */
class GetAllSubscriptionListRequest extends ARequest
{
	use WithPagination, WithTestMode;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::SUBSCRIPTIONS_ALL;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_GET;
	/*** @var string */
	protected string $responseClass = SubscriptionListResponse::class;
	/*** @var array */
	protected array $availableInputParameters = [];

	/***
	 * @param string $profileId
	 * @return $this
	 */
	public function withProfileId(string $profileId): self
	{
		$this->availableInputParameters['profileId'] = $profileId;
		return $this;
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
		return ApiEndpoint::getFor($this->endpointPrefix);
	}
}