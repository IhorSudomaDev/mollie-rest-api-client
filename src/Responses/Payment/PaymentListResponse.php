<?php

namespace MollieRestApiClient\Responses\Payment;

use MollieRestApiClient\Responses\Abstracts\AListResponse;
use MollieRestApiClient\ValueObjects\Model;

/**
 * Class PaymentListResponse
 * @package MollieRestApiClient\Responses\Payment
 */
class PaymentListResponse extends AListResponse
{
	/*** @var string */
	protected string $modelClass = Model::PAYMENT;
}