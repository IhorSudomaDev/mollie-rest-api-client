<?php

namespace MollieRestApiClient\ValueObjects\Payment;

/**
 * Class SequenceType
 * @package MollieRestApiClient\ValueObjects\Payment
 */
class SequenceType
{
	/*** @var string */
	public const ONEOFF = 'oneoff';
	/*** @var string */
	public const FIRST = 'first';
	/*** @var string */
	public const RECURRING = 'recurring';

	/*** @return string[] */
	public static function getPossibleValueList(): array
	{
		return [
			self::ONEOFF,
			self::FIRST,
			self::RECURRING,
		];
	}
}