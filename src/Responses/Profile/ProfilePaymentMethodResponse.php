<?php

namespace MollieRestApiClient\Responses\Profile;

use MollieRestApiClient\Responses\Abstracts\ASingleResponse;
use MollieRestApiClient\ValueObjects\Model;

/**
 * Class ProfilePaymentMethodResponse
 * @package MollieRestApiClient\Responses\Profile
 */
class ProfilePaymentMethodResponse extends ASingleResponse
{
	/*** @var string */
	protected string $modelClass = Model::METHOD;
}