<?php

namespace MollieRestApiClient\Requests\Customer;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Customer\CustomerResponse;
use MollieRestApiClient\Traits\WithCustomerIdPrefix;
use MollieRestApiClient\Traits\WithTestMode;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class GetCustomerRequest
 * @package MollieRestApiClient\Requests\Customer
 */
class GetCustomerRequest extends ARequest
{
	use WithCustomerIdPrefix, WithTestMode;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::CUSTOMERS_WITH_IDENTIFIER;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_GET;
	/*** @var string */
	protected string $responseClass = CustomerResponse::class;

	/**
	 * @param string $accessToken
	 * @param string $customerId
	 */
	public function __construct(string $accessToken, string $customerId)
	{
		parent::__construct($accessToken);
		$this->checkCustomerIdPrefix($customerId);
		$this->setCustomerId($customerId);
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), $this->getCustomerId());
	}
}