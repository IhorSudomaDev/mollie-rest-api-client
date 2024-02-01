<?php

namespace MollieRestApiClient\Responses\Customer;

use MollieRestApiClient\Responses\Abstracts\AListResponse;
use MollieRestApiClient\ValueObjects\Model;

/**
 * Class CustomerListResponse
 * @package MollieRestApiClient\Responses\Customer
 */
class CustomerListResponse extends AListResponse
{
	/*** @var string */
	protected string $modelClass = Model::CUSTOMER;
}