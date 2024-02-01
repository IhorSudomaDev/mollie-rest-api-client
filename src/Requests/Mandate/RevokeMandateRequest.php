<?php

namespace MollieRestApiClient\Requests\Mandate;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Mandate\MandateResponse;
use MollieRestApiClient\Traits\WithCustomerIdPrefix;
use MollieRestApiClient\Traits\WithMandateIdPrefix;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class RevokeMandateRequest
 * @package MollieRestApiClient\Requests\Mandate
 */
class RevokeMandateRequest extends ARequest
{
	use WithCustomerIdPrefix, WithMandateIdPrefix;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::MANDATES_WITH_IDENTIFIER;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_DELETE;
	/*** @var string */
	protected string $responseClass = MandateResponse::class;
	/*** @var array */
	protected array $queryParameters = [];
	/*** @var array */
	protected array $availableInputParameters = [];

	/**
	 * @param string $accessToken
	 * @param string $customerId
	 * @param string $mandateId
	 */
	public function __construct(string $accessToken, string $customerId, string $mandateId)
	{
		parent::__construct($accessToken);
		$this->checkCustomerIdPrefix($customerId);
		$this->setCustomerId($customerId);
		$this->checkMandateIdPrefix($mandateId);
		$this->setMandateId($mandateId);
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
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), $this->getCustomerId(), $this->getMandateId());
	}
}