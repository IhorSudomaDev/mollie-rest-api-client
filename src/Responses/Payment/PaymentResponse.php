<?php

namespace MollieRestApiClient\Responses\Payment;

use MollieRestApiClient\Responses\Abstracts\ASingleResponse;
use MollieRestApiClient\ValueObjects\Model;

/**
 * Class PaymentResponse
 * @package MollieRestApiClient\Responses\Payment
 */
class PaymentResponse extends ASingleResponse
{
	/*** @var string */
	protected string $modelClass = Model::PAYMENT;
}