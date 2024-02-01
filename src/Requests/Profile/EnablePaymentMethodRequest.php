<?php

namespace MollieRestApiClient\Requests\Profile;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Profile\ProfilePaymentMethodResponse;
use MollieRestApiClient\Traits\WithProfileIdPrefix;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class EnablePaymentMethodRequest
 * @package MollieRestApiClient\Requests\Profile
 */
class EnablePaymentMethodRequest extends ARequest
{
	use WithProfileIdPrefix;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::PROFILE_PAYMENT_METHOD;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_POST;
	/*** @var string */
	protected string $responseClass = ProfilePaymentMethodResponse::class;
	/*** @var array */
	protected array $availableInputParameters = [
		'_links' => []
	];
	/*** @var string */
	protected string $method;

	/**
	 * @param string $accessToken
	 * @param string $profileId
	 * @param string $method
	 */
	public function __construct(string $accessToken, string $profileId, string $method)
	{
		parent::__construct($accessToken);
		$this->checkProfileIdPrefix($profileId);
		$this->setProfileId($profileId);
		$this->setMethod($method);
	}

	/*** @return string */
	private function getMethod(): string
	{
		return $this->method;
	}

	/*** @param string $method */
	private function setMethod(string $method): void
	{
		$this->method = $method;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), $this->getProfileId(), $this->getMethod());
	}
}