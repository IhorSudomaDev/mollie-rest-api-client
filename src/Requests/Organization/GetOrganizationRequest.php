<?php

namespace MollieRestApiClient\Requests\Organization;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Organization\OrganizationResponse;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;
use RuntimeException;

/**
 * Class GetOrganizationRequest
 * @package MollieRestApiClient\Requests\Organization
 */
class GetOrganizationRequest extends ARequest
{
	/*** @var string */
	protected string $resourceIdPrefix = 'org_';
	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::ORGANIZATIONS_WITH_IDENTIFIER;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_GET;
	/*** @var string */
	protected string $responseClass = OrganizationResponse::class;
	/*** @var string */
	protected string $organizationId;

	/**
	 * @param string $accessToken
	 * @param string $organizationId
	 */
	public function __construct(string $accessToken, string $organizationId)
	{
		parent::__construct($accessToken);
		if (empty($organizationId) || strpos($organizationId, $this->resourceIdPrefix) !== 0) {
			throw new RuntimeException("Invalid organization id: '{$organizationId}'. An organization id should start with '" . $this->resourceIdPrefix . "'.");
		}
		$this->organizationId = $organizationId;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), $this->organizationId);
	}
}