<?php

namespace MollieRestApiClient\Models;

/**
 * Class Address
 * @property string streetAndNumber
 * @property string postalCode
 * @property string city
 * @property string country
 * @package MollieRestApiClient\Models
 */
class Address
{
	/*** @return string */
	public function getStreetAndNumber(): string
	{
		return $this->streetAndNumber;
	}

	/*** @return string */
	public function getPostalCode(): string
	{
		return $this->postalCode;
	}

	/*** @return string */
	public function getCity(): string
	{
		return $this->city;
	}

	/*** @return string */
	public function getCountry(): string
	{
		return $this->country;
	}
}