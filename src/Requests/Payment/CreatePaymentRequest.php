<?php

namespace MollieRestApiClient\Requests\Payment;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Payment\PaymentResponse;
use MollieRestApiClient\Traits\WithProfileIdPrefix;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;
use MollieRestApiClient\ValueObjects\Locale;
use MollieRestApiClient\ValueObjects\Payment\SequenceType;
use MollieRestApiClient\ValueObjects\PaymentMethod;
use RuntimeException;

/**
 * Class CreatePaymentRequest
 * @package MollieRestApiClient\Requests\Payment
 */
class CreatePaymentRequest extends ARequest
{
	use WithProfileIdPrefix;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::PAYMENTS;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_POST;
	/*** @var string */
	protected string $responseClass = PaymentResponse::class;
	/*** @var array */
	protected array $queryParameters = [];
	/*** @var array */
	protected array $availableInputParameters = [
		'_links' => [],
	];

	/**
	 * @param string      $accessToken
	 * @param float      $value
	 * @param string      $currency
	 * @param string      $description
	 * @param string|NULL $redirectUrl
	 */
	public function __construct(string $accessToken, float $value, string $currency, string $description, ?string $redirectUrl)
	{
		parent::__construct($accessToken);
		$this->withAmount($value, $currency);
		$this->withDescription($description);
		$this->withRedirectUrl($redirectUrl);
	}

	/***
	 * @param float $value
	 * @param string $currency
	 */
	private function withAmount(float $value, string $currency): void
	{
		$strValue  = convertFloatToStr($value);
		$this->availableInputParameters = [
			'amount' => [
				'value' => $strValue,
				'currency' => $currency
			]
		];
	}

	/*** @param string $description */
	private function withDescription(string $description): void
	{
		$this->availableInputParameters['description'] = $description;
	}

	/*** @param string|NULL $redirectUrl */
	private function withRedirectUrl(?string $redirectUrl): void
	{
		$this->availableInputParameters['redirectUrl'] = $redirectUrl;
	}

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
	 * @param string|NULL $cancelUrl
	 * @return $this
	 */
	public function withCancelUrl(?string $cancelUrl): self
	{
		$this->availableInputParameters['cancelUrl'] = $cancelUrl;
		return $this;
	}

	/**
	 * @param string|NULL $webhookUrl
	 * @return $this
	 */
	public function withWebhookUrl(?string $webhookUrl): self
	{
		$this->availableInputParameters['webhookUrl'] = $webhookUrl;
		return $this;
	}

	/**
	 * @param string|NULL $locale
	 * @return $this
	 */
	public function withLocale(?string $locale): self
	{
		if ( ! in_array($locale, Locale::getPossibleValueList(), TRUE)) {
			throw new RuntimeException('Undefined locale');
		}
		$this->availableInputParameters['locale'] = $locale;
		return $this;
	}

	/**
	 * @param array|NULL $methodList
	 * @return $this
	 */
	public function withMethod(?array $methodList): self
	{

		$this->availableInputParameters['method'] = $methodList;
		return $this;
	}

	/**
	 * @param string $cardToken
	 * @return $this
	 */
	public function withCardToken(string $cardToken): self
	{
		$this->availableInputParameters['cardToken'] = $cardToken;
		return $this;
	}

	/**
	 * @param string $restrictPaymentMethodsToCountry
	 * @return CreatePaymentRequest
	 */
	public function withRestrictPaymentMethodsToCountry(string $restrictPaymentMethodsToCountry): self
	{
		$this->availableInputParameters['restrictPaymentMethodsToCountry'] = $restrictPaymentMethodsToCountry;
		return $this;
	}

	/**
	 * @param string $metadata
	 * @return $this
	 */
	public function withMetaData(string $metadata): self
	{
		$this->availableInputParameters['metadata'] = $metadata;
		return $this;
	}

	/**
	 * @param string $captureMode
	 * @return $this
	 */
	public function withCaptureMode(string $captureMode): self
	{
		$this->availableInputParameters['captureMode'] = $captureMode;
		return $this;
	}

	/**
	 * @param string $captureDelay
	 * @return $this
	 */
	public function withCaptureDelay(string $captureDelay): self
	{
		$this->availableInputParameters['captureDelay'] = $captureDelay;
		return $this;
	}

	/**
	 * @param string $issuer
	 * @return $this
	 */
	public function withIdealIssuer(string $issuer): self
	{
		$this->availableInputParameters['issuer'] = $issuer;
		return $this;
	}

	/*** @return $this */
	public function withQrCode(): self
	{
		$this->queryParameters['include'] = 'details.qrCode';
		return $this;
	}

	/*** @return $this */
	public function withTestMode(): self
	{
		$this->availableInputParameters['testmode'] = TRUE;
		return $this;
	}

	/**
	 * @param string      $sequenceType
	 * @param string      $customerId
	 * @param string|NULL $mandateId
	 */
	public function makeRecurring(string $sequenceType, string $customerId, ?string $mandateId = NULL): void
	{
		if ( ! in_array($sequenceType, SequenceType::getPossibleValueList(), TRUE)) {
			throw new RuntimeException('Undefined sequence type');
		}
		$this->availableInputParameters['sequenceType'] = $sequenceType;
		$this->availableInputParameters['customerId']   = $customerId;
		if ($mandateId !== NULL) {
			$this->availableInputParameters['mandateId'] = $mandateId;
		}
	}

	/*** @return string */
	public function getUrl(): string
	{
		return ApiEndpoint::getFor($this->endpointPrefix);
	}
}