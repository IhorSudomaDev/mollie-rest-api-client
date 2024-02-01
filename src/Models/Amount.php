<?php

namespace MollieRestApiClient\Models;

/**
 * Class Amount
 * @property string currency
 * @property string value
 * @package MollieRestApiClient\Models
 */
class Amount
{
	/*** @return string */
	public function getCurrency(): string
	{
		return $this->currency;
	}

	/*** @param string $currency */
	public function setCurrency(string $currency): void
	{
		$this->currency = $currency;
	}

	/*** @return string */
	public function getValue(): string
	{
		return $this->value;
	}

	/*** @param string $value */
	public function setValue(string $value): void
	{
		$this->value = $value;
	}
}