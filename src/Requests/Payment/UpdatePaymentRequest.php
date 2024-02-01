<?php

namespace MollieRestApiClient\Requests\Payment;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Payment\PaymentResponse;
use MollieRestApiClient\Traits\WithPaymentIdPrefix;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;
use MollieRestApiClient\ValueObjects\Locale;
use RuntimeException;

/**
 * Class UpdatePaymentRequest
 * @package MollieRestApiClient\Requests\Payment
 */
class UpdatePaymentRequest extends ARequest
{
	use WithPaymentIdPrefix;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::PAYMENTS_WITH_IDENTIFIER;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_PATCH;
	/*** @var string */
	protected string $responseClass = PaymentResponse::class;
	/*** @var array */
	protected array $availableInputParameters = [
		'_links' => [],
	];

	/**
	 * @param string $accessToken
	 * @param string $paymentId
	 */
	public function __construct(string $accessToken, string $paymentId)
	{
		parent::__construct($accessToken);
		$this->checkPaymentIdPrefix($paymentId);
		$this->setPaymentId($paymentId);
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
	 * @param string $method
	 * @return $this
	 */
	public function withMethod(string $method): self
	{
		$this->availableInputParameters['method'] = $method;
		return $this;
	}

	/**
	 * @param string $restrictPaymentMethodsToCountry
	 * @return $this
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
	 * @param string $issuer
	 * @return $this
	 */
	public function withIdealIssuer(string $issuer): self
	{
		$this->availableInputParameters['issuer'] = $issuer;
		return $this;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), $this->getPaymentId());
	}
}