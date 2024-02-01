<?php

namespace MollieRestApiClient\ValueObjects;

class SubscriptionMethod
{
	/*** @var string */
	public const CREDIT_CARD = 'creditcard';
	/*** @var string */
	public const DIRECT_DEBIT = 'directdebit';
	/*** @var string */
	public const PAYPAL = 'paypal';
	/*** @var string */
	public const NULL = 'null';

	/*** @return string[] */
	public static function getPossibleValueList(): array
	{
		return [
			self::CREDIT_CARD,
			self::DIRECT_DEBIT,
			self::PAYPAL,
			self::NULL,
		];
	}
}