<?php

namespace MollieRestApiClient\ValueObjects\Payment;

/**
 * Class PaymentStatus
 * @package MollieRestApiClient\ValueObjects\Payment
 */
class PaymentStatus
{
	/*** @var string */
	public const CANCELED = 'canceled';
	/*** @var string */
	public const EXPIRED = 'expired';
	/*** @var string */
	public const FAILED = 'failed';
	/*** @var string */
	public const OPEN = 'open';
	/*** @var string */
	public const PAID = 'paid';
}