<?php

namespace MollieRestApiClient\Requests\Profile;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Profile\ProfileResponse;
use MollieRestApiClient\Traits\WithProfileIdPrefix;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class GetProfileRequest
 * @package MollieRestApiClient\Requests\Profile
 */
class GetProfileRequest extends ARequest
{
	use WithProfileIdPrefix;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::PROFILES_WITH_IDENTIFIER;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_GET;
	/*** @var string */
	protected string $responseClass = ProfileResponse::class;

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