<?php

namespace MollieRestApiClient\Requests\Method;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Method\MethodListResponse;
use MollieRestApiClient\Traits\WithProfileIdPrefix;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class GetEnabledPaymentMethodListRequest
 * @package MollieRestApiClient\Requests\Method
 */
class GetEnabledPaymentMethodListRequest extends ARequest
{
	use WithProfileIdPrefix;

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