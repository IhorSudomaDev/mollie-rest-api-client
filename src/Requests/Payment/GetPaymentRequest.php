<?php

namespace MollieRestApiClient\Requests\Payment;

use MollieRestApiClient\Responses\Payment\PaymentResponse;
use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Traits\WithPaymentIdPrefix;
use MollieRestApiClient\Traits\WithTestMode;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class GetPaymentRequest
 * @package MollieRestApiClient\Requests\Payment
 */
class GetPaymentRequest extends ARequest
{
	use WithPaymentIdPrefix, WithTestMode;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::PAYMENTS_WITH_IDENTIFIER;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_GET;
	/*** @var string */
	protected string $responseClass = PaymentResponse::class;
	/*** @var array */
	protected array $queryParameters = [];
	/*** @var array */
	protected array $availableInputParameters = [];

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
	public function withQrCode(): self
	{
		$this->queryParameters['include'] = 'details.qrCode';
		return $this;
	}

	/*** @return $this */
	public function withRemainderDetails(): self
	{
		$this->queryParameters['include'] = 'details.remainderDetails';
		return $this;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), $this->getPaymentId());
	}
}