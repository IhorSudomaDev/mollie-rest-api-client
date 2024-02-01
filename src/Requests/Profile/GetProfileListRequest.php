<?php

namespace MollieRestApiClient\Requests\Profile;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Profile\ProfileListResponse;
use MollieRestApiClient\Traits\WithPagination;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class GetProfileListRequest
 * @package MollieRestApiClient\Requests\Profile
 */
class GetProfileListRequest extends ARequest
{
	use WithPagination;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::PROFILES;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_GET;
	/*** @var string */
	protected string $responseClass = ProfileListResponse::class;
	/*** @var array */
	protected array $availableInputParameters = [];

	/**
	 * @param string $profileId
	 * @return $this
	 */
	public function withFrom(string $profileId): self
	{
		$this->availableInputParameters['from'] = $profileId;
		return $this;
	}

	/**
	 * @param int $limit
	 * @return $this
	 */
	public function withLimit(int $limit): self
	{
		$this->checkLimit($limit);
		$this->availableInputParameters['limit'] = $limit;
		return $this;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return ApiEndpoint::getFor($this->endpointPrefix);
	}
}