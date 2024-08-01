<?php

namespace MollieRestApiClient\Requests\Method;

use InvalidArgumentException;
use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Method\MethodListResponse;
use MollieRestApiClient\Traits\WithPagination;
use MollieRestApiClient\Traits\WithProfileIdPrefix;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;
use MollieRestApiClient\ValueObjects\Payment\SequenceType;

/**
 * Class GetPaymentMethodListRequest
 * @package MollieRestApiClient\Requests\Method
 */
class GetPaymentMethodListRequest extends ARequest
{
	use WithPagination, WithProfileIdPrefix;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::METHODS;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_GET;
	/*** @var string */
	protected string $responseClass = MethodListResponse::class;
	/*** @var array|array[] */
	protected array $availableInputParameters = [
		'_links' => [],
	];

	/**
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
	 * @param string $sequenceType
	 * @return $this
	 */
	public function withSequenceType(string $sequenceType): self
	{
		if ( ! in_array($sequenceType, SequenceType::getPossibleValueList(), TRUE)) {
			throw new InvalidArgumentException("Sequence type '{$sequenceType}' is not supported.");
		}
		$this->availableInputParameters['sequenceType'] = $sequenceType;
		return $this;
	}

	/**
	 * @param string $locale
	 * @return $this
	 */
	public function withLocale(string $locale): self
	{
		$this->availableInputParameters['locale'] = $locale;
		return $this;
	}

	/**
	 * @param float $value
	 * @param string $currency
	 * @return $this
	 */
	public function withAmount(float $value, string $currency): self
	{
		$strValue  = convertFloatToStr($value);
		$this->availableInputParameters = [
			'amount' => [
				'value' => $strValue,
				'currency' => $currency
			]
		];
		return $this;
	}

	/**
	 * @param string $billingCountry
	 * @return $this
	 */
	public function withBillingCountry(string $billingCountry): self
	{
		$this->availableInputParameters['billingCountry'] = $billingCountry;
		return $this;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), '');
	}
}