<?php

namespace MollieRestApiClient\Requests\Payment;

use MollieRestApiClient\Responses\Payment\PaymentListResponse;
use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Traits\WithPagination;
use MollieRestApiClient\Traits\WithProfileIdPrefix;
use MollieRestApiClient\Traits\WithTestMode;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class GetPaymentListRequest
 * @package MollieRestApiClient\Requests\Payment
 */
class GetPaymentListRequest extends ARequest
{
	use WithProfileIdPrefix, WithPagination, WithTestMode;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::PAYMENTS;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_GET;
	/*** @var string */
	protected string $responseClass = PaymentListResponse::class;
	/*** @var array */
	protected array $availableInputParameters = [];

	/***
	 * @param string $profileId
	 * @return $this
	 */
	public function withProfileId(string $profileId): self
	{
		$this->checkProfileIdPrefix($profileId);
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