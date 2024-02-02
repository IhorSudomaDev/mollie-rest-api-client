<?php

namespace MollieRestApiClient\Requests\Mandate;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Mandate\MandateResponse;
use MollieRestApiClient\Traits\WithCustomerIdPrefix;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class CreateMandateRequest
 * @package MollieRestApiClient\Requests\Mandate
 */
class CreateMandateRequest extends ARequest
{
	use WithCustomerIdPrefix;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::MANDATES;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_POST;
	/*** @var string */
	protected string $responseClass = MandateResponse::class;
	/*** @var array */
	protected array $availableInputParameters = [];

	/**
	 * @param string $accessToken
	 * @param string $customerId
	 * @param string $method
	 * @param string $consumerName
	 */
	public function __construct(string $accessToken, string $customerId, string $method, string $consumerName)
	{
		parent::__construct($accessToken);
		$this->checkCustomerIdPrefix($customerId);
		$this->setCustomerId($customerId);
		$this->withMethod($method);
		$this->withConsumerName($consumerName);
	}

	/**
	 * @param string $method
	 * @return void
	 */
	private function withMethod(string $method): void
	{
		$this->availableInputParameters['method'] = $method;
	}

	/**
	 * @param string $consumerName
	 * @return void
	 */
	private function withConsumerName(string $consumerName): void
	{
		$this->availableInputParameters['consumerName'] = $consumerName;
	}

	/**
	 * @param string $consumerAccount
	 * @return $this
	 */
	public function withConsumerAccount(string $consumerAccount): self
	{
		$this->availableInputParameters['consumerAccount'] = $consumerAccount;
		return $this;
	}

	/**
	 * @param string $consumerBic
	 * @return $this
	 */
	public function withConsumerBic(string $consumerBic): self
	{
		$this->availableInputParameters['consumerBic'] = $consumerBic;
		return $this;
	}

	/**
	 * @param string $consumerEmail
	 * @return $this
	 */
	public function withConsumerEmail(string $consumerEmail): self
	{
		$this->availableInputParameters['consumerEmail'] = $consumerEmail;
		return $this;
	}

	/**
	 * @param string $signatureDate
	 * @return $this
	 */
	public function withSignatureDate(string $signatureDate): self
	{
		$this->availableInputParameters['signatureDate'] = $signatureDate;
		return $this;
	}

	/**
	 * @param string $mandateReference
	 * @return $this
	 */
	public function withMandateReference(string $mandateReference): self
	{
		$this->availableInputParameters['mandateReference'] = $mandateReference;
		return $this;
	}

	/**
	 * @param string $paypalBillingAgreementIde
	 * @return $this
	 */
	public function withPaypalBillingAgreementId(string $paypalBillingAgreementIde): self
	{
		$this->availableInputParameters['paypalBillingAgreementId'] = $paypalBillingAgreementIde;
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
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), $this->getCustomerId());
	}
}