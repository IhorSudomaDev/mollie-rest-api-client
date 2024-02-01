<?php

namespace MollieRestApiClient\Responses\Organization;

use MollieRestApiClient\Responses\Abstracts\ASingleResponse;
use MollieRestApiClient\ValueObjects\Model;

/**
 * Class OrganizationResponse
 * @package MollieRestApiClient\Responses\Organization
 */
class OrganizationResponse extends ASingleResponse
{
	/*** @var string */
	protected string $modelClass = Model::ORGANIZATION;
}