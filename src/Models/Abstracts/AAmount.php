<?php

namespace MollieRestApiClient\Models\Abstracts;

/**
 * Class AAmount
 * @property string currency
 * @property string value
 * @package MollieRestApiClient\Models\Abstracts
 */
abstract class AAmount
{
	/*** @return string */
	public function getCurrency(): string
	{
		return $this->currency;
	}

	/*** @return string */
	public function getValue(): string
	{
		return $this->value;
	}
}