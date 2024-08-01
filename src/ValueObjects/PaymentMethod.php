<?php

namespace MollieRestApiClient\ValueObjects;

/**
 * Class PaymentMethod
 * @package MollieRestApiClient\ValueObjects
 */
class PaymentMethod
{
	/*** @var string */
	public const ALMA = 'alma';
	/*** @var string */
	public const APPLE_PAY = 'applepay';
	/*** @var string */
	public const BACS = 'bacs';
	/*** @var string */
	public const BANCOMAT_PAY = 'bancomatpay';
	/*** @var string */
	public const BANCONTACT = 'bancontact';
	/*** @var string */
	public const BANKTRANSFER = 'banktransfer';
	/*** @var string */
	public const BELFIUS = 'belfius';
	/*** @var string */
	public const BLIK = 'blik';
	/*** @var string */
	public const CREDIT_CARD = 'creditcard';
	/*** @var string */
	public const DIRECT_DEBIT = 'directdebit';
	/*** @var string */
	public const  EPS = 'eps';
	/*** @var string */
	public const GIFT_CARD = 'giftcard';
	/*** @var string */
	public const IDEAL = 'ideal';
	/*** @var string */
	public const KBC = 'kbc';
	/*** @var string */
	public const MYBANK = 'mybank';
	/*** @var string */
	public const PAYPAL = 'paypal';
	/*** @var string */
	public const PAYSAFECARD = 'paysafecard';
	/*** @var string */
	public const PRZELEWY24 = 'przelewy24';
	/*** @var string */
	public const RIVERTY = 'riverty';
	/*** @var string */
	public const SATISPAY = 'satispay';
	/*** @var string */
	public const TRUSTLY = 'trustly';
	/*** @var string */
	public const TWINT = 'twint';

	/*** @return string[] */
	public static function getPossibleValueList(): array
	{
		return [
			self::ALMA,
			self::APPLE_PAY,
			self::BACS,
			self::BANCOMAT_PAY,
			self::BANCONTACT,
			self::BANKTRANSFER,
			self::BELFIUS,
			self::BLIK,
			self::CREDIT_CARD,
			self::DIRECT_DEBIT,
			self::EPS,
			self::GIFT_CARD,
			self::IDEAL,
			self::KBC,
			self::MYBANK,
			self::PAYPAL,
			self::PAYSAFECARD,
			self::PRZELEWY24,
			self::RIVERTY,
			self::SATISPAY,
			self::TRUSTLY,
			self::TWINT,
		];
	}
}