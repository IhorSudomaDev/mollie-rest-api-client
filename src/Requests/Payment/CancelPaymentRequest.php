<?php

namespace MollieRestApiClient\Requests\Payment;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Payment\PaymentResponse;
use MollieRestApiClient\Traits\WithPaymentIdPrefix;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class CancelPaymentRequest
 * @package MollieRestApiClient\Requests\Payment
 */
class CancelPaymentRequest extends ARequest
{
	use WithPaymentIdPrefix;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::PAYMENTS_WITH_IDENTIFIER;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_DELETE;
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

	/*** @return $this */
	public function withTestMode(): self
	{
		$this->availableInputParameters['testmode'] = TRUE;
		return $this;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), $this->getPaymentId());
	}
}