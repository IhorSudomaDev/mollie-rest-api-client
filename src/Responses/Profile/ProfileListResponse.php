<?php

namespace MollieRestApiClient\Responses\Profile;

use MollieRestApiClient\Responses\Abstracts\AListResponse;
use MollieRestApiClient\ValueObjects\Model;

/**
 * Class ProfileListResponse
 * @package MollieRestApiClient\Responses\Profile
 */
class ProfileListResponse extends AListResponse
{
	/*** @var string */
	protected string $modelClass = Model::PROFILE;
}