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
	 * @param string $accessToken
	 * @param string $profileId
	 * @param string $value
	 * @param string $description
	 * @param string $redirectUrl
	 */
	public function __construct(string $accessToken, string $profileId, string $value, string $description, string $redirectUrl)
	{
		parent::__construct($accessToken);
		$this->checkProfileIdPrefix($profileId);
		$this->withAmount($value);
		$this->withDescription($description);
		$this->withRedirectUrl($redirectUrl);
		$this->withProfileId($profileId);
		$this->withIdealMethod();
	}

	/*** @param string $value */
	private function withAmount(string $value): void
	{
		$this->availableInputParameters = ['amount' => ['value' => $value, 'currency' => 'EUR']];
	}

	/*** @param string $description */
	private function withDescription(string $description): void
	{
		$this->availableInputParameters['description'] = $description;
	}

	/*** @param string $redirectUrl */
	private function withRedirectUrl(string $redirectUrl): void
	{
		$this->availableInputParameters['redirectUrl'] = $redirectUrl;
	}

	/**
	 * @param string $profileId
	 * @return void
	 */
	private function withProfileId(string $profileId): void
	{
		$this->availableInputParameters['profileId'] = $profileId;
	}

	/*** @return void */
	private function withIdealMethod(): void
	{
		$this->availableInputParameters['method'] = PaymentMethod::IDEAL;
	}

	/**
	 * @param string $cancelUrl
	 * @return $this
	 */
	public function withCancelUrl(string $cancelUrl): self
	{
		$this->availableInputParameters['cancelUrl'] = $cancelUrl;
		return $this;
	}

	/**
	 * @param string $webhookUrl
	 * @return $this
	 */
	public function withWebhookUrl(string $webhookUrl): self
	{
		$this->availableInputParameters['webhookUrl'] = $webhookUrl;
		return $this;
	}

	/**
	 * @param string $locale
	 * @return $this
	 */
	public function withLocale(string $locale): self
	{
		if ( ! in_array($locale, Locale::getPossibleValueList(), TRUE)) {
			throw new RuntimeException('Undefined locale');
		}
		$this->availableInputParameters['locale'] = $locale;
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
	 * @param mixed $metadata
	 * @return $this
	 */
	public function withMetaData($metadata): self
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
	public function makeRecurring(string $sequenceType, string $customerId, ?string $mandateId = NULL)
	{
		if ( ! in_array($sequenceType, SequenceType::getPossibleValueList(), TRUE)) {
			throw new RuntimeException('Undefined sequence type');
		}
		$this->availableInputParameters['sequenceType']   = $sequenceType;
		$this->availableInputParameters['customerId'] = $customerId;
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