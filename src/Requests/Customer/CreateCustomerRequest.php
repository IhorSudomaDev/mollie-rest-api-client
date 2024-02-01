<?php

namespace MollieRestApiClient\Requests\Customer;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Customer\CustomerResponse;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class CreateCustomerRequest
 * @package MollieRestApiClient\Requests\Profile
 */
class CreateCustomerRequest extends ARequest
{
	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::CUSTOMERS;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_POST;
	/*** @var string */
	protected string $responseClass = CustomerResponse::class;
	/*** @var array */
	protected array $availableInputParameters = [];

	/***
	 * @param string $name
	 * @return $this
	 */
	public function withName(string $name): self
	{
		$this->availableInputParameters['name'] = $name;
		return $this;
	}

	/***
	 * @param string $email
	 * @return $this
	 */
	public function withEmail(string $email): self
	{
		$this->availableInputParameters['email'] = $email;
		return $this;
	}

	/***
	 * @param string $locale
	 * @return $this
	 */
	public function withLocale(string $locale): self
	{
		$this->availableInputParameters['locale'] = $locale;
		return $this;
	}

	/**
	 * @param mixed $metadata
	 * @return $this
	 */
	public function withMetaData($metadata): self
	{
		$this->availableInputParameters['metadata'] = $metadata;
		return $this;
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
		return ApiEndpoint::getFor($this->endpointPrefix);
	}
}