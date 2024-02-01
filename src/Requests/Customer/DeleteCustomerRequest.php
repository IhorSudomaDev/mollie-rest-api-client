<?php

namespace MollieRestApiClient\Requests\Customer;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Customer\CustomerResponse;
use MollieRestApiClient\Traits\WithCustomerIdPrefix;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class DeleteCustomerRequest
 * @package MollieRestApiClient\Requests\Customer
 */
class DeleteCustomerRequest extends ARequest
{
	use WithCustomerIdPrefix;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::CUSTOMERS_WITH_IDENTIFIER;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_DELETE;
	/*** @var string */
	protected string $responseClass = CustomerResponse::class;
	/*** @var array */
	protected array $availableInputParameters = [];

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

	/*** @return $this */
	public function withTestMode(): self
	{
		$this->availableInputParameters['testmode'] = TRUE;
		return $this;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), $this->getCustomerId());
	}
}