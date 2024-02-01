<?php

namespace MollieRestApiClient\Responses\Profile;

use MollieRestApiClient\Responses\Abstracts\ASingleResponse;
use MollieRestApiClient\ValueObjects\Model;

/**
 * Class ProfileResponse
 * @package MollieRestApiClient\Responses\Profile
 */
class ProfileResponse extends ASingleResponse
{
	/*** @var string */
	protected string $modelClass = Model::PROFILE;
}