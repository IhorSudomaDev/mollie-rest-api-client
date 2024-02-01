<?php

namespace MollieRestApiClient\Responses\Customer;

use MollieRestApiClient\Responses\Abstracts\ASingleResponse;
use MollieRestApiClient\ValueObjects\Model;

/**
 * Class CustomerResponse
 * @package MollieRestApiClient\Responses\Customer
 */
class CustomerResponse extends ASingleResponse
{
	/*** @var string */
	protected string $modelClass = Model::CUSTOMER;
}