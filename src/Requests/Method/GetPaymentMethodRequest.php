<?php

namespace MollieRestApiClient\Requests\Method;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Method\MethodResponse;
use MollieRestApiClient\Traits\WithProfileIdPrefix;
use MollieRestApiClient\Traits\WithTestMode;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class GetPaymentMethodRequest
 * @package MollieRestApiClient\Requests\Method
 */
class GetPaymentMethodRequest extends ARequest
{
	use WithProfileIdPrefix, WithTestMode;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::METHODS;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_GET;
	/*** @var string */
	protected string $responseClass = MethodResponse::class;
	/*** @var array|array[] */
	protected array $availableInputParameters = [
		'_links' => [],
	];

	/**
	 * @param string $accessToken
	 * @param string $profileId
	 */
	public function __construct(string $accessToken, string $profileId)
	{
		parent::__construct($accessToken);
		$this->checkProfileIdPrefix($profileId);
		$this->setProfileId($profileId);
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), $this->getProfileId());
	}
}