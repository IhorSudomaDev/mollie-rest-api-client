<?php

namespace MollieRestApiClient\Requests\Customer;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Customer\CustomerListResponse;
use MollieRestApiClient\Traits\WithPagination;
use MollieRestApiClient\Traits\WithTestMode;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class GetCustomerListRequest
 * @package MollieRestApiClient\Requests\Customer
 */
class GetCustomerListRequest extends ARequest
{
	use WithPagination, WithTestMode;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::CUSTOMERS;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_GET;
	/*** @var string */
	protected string $responseClass = CustomerListResponse::class;
	/*** @var array */
	protected array $availableInputParameters = [];

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