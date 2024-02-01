<?php

namespace MollieRestApiClient\ValueObjects;

use RuntimeException;

/**
 * Class ApiEndpoint
 * @package MollieRestApiClient\ValueObjects
 */
class ApiEndpoint
{
	/*** @var string */
	public const BASE = 'https://api.mollie.com/v2/';
	/*** @var string */
	public const CUSTOMERS = 'customers';
	/*** @var string */
	public const CUSTOMERS_WITH_IDENTIFIER = 'customers_with_identifier';
	/*** @var string */
	public const MANDATES = 'mandates';
	/*** @var string */
	public const MANDATES_WITH_IDENTIFIER = 'mandates_with_identifier';
	/*** @var string */
	public const METHODS = 'methods';
	/*** @var string */
	public const ORGANIZATIONS_WITH_IDENTIFIER = 'organizations_with_identifier';
	/*** @var string */
	public const PAYMENTS = 'payments';
	/*** @var string */
	public const PAYMENTS_WITH_IDENTIFIER = 'payments_with_identifier';
	/*** @var string */
	public const PROFILES = 'profiles';
	/*** @var string */
	public const PROFILES_WITH_IDENTIFIER = 'profiles_with_identifier';
	/*** @var string */
	public const PROFILES_PAYMENT_METHOD = 'profiles_payment_methods';
	/*** @var string */
	public const SUBSCRIPTIONS = 'subscriptions';
	/*** @var string */
	public const SUBSCRIPTIONS_ALL = 'subscriptions_all';
	/*** @var string */
	public const SUBSCRIPTIONS_WITH_IDENTIFIERS = 'subscriptions_with_identifiers';

	/*** @var array */
	private const URL_PREFIX = [
		self::CUSTOMERS                      => 'customers',
		self::CUSTOMERS_WITH_IDENTIFIER      => 'customers/%s',
		self::MANDATES                       => 'customers/%s/mandates',
		self::MANDATES_WITH_IDENTIFIER       => 'customers/%s/mandates/%s',
		self::METHODS                        => 'methods/%s',
		self::ORGANIZATIONS_WITH_IDENTIFIER  => 'organizations/%s',
		self::PAYMENTS                       => 'payments',
		self::PAYMENTS_WITH_IDENTIFIER       => 'payments/%s',
		self::PROFILES                       => 'profiles',
		self::PROFILES_WITH_IDENTIFIER       => 'profiles/%s',
		self::PROFILES_PAYMENT_METHOD        => 'profiles/%s/methods/%s',
		self::SUBSCRIPTIONS                  => 'customers/%s/subscriptions',
		self::SUBSCRIPTIONS_ALL              => 'subscriptions',
		self::SUBSCRIPTIONS_WITH_IDENTIFIERS => 'customers/%s/subscriptions/%s',
	];

	/**
	 * @param string $prefix
	 * @return string
	 */
	public static function getFor(string $prefix): string
	{
		if (isset(self::URL_PREFIX[$prefix])) {
			return sprintf('%s%s', self::BASE, self::URL_PREFIX[$prefix] ?? '');
		}
		throw new RuntimeException('Prefix is incorrect');
	}
}