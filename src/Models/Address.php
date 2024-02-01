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

	/*** @param string $streetAndNumber */
	public function setStreetAndNumber(string $streetAndNumber): void
	{
		$this->streetAndNumber = $streetAndNumber;
	}

	/*** @return string */
	public function getPostalCode(): string
	{
		return $this->postalCode;
	}

	/*** @param string $postalCode */
	public function setPostalCode(string $postalCode): void
	{
		$this->postalCode = $postalCode;
	}

	/*** @return string */
	public function getCity(): string
	{
		return $this->city;
	}

	/*** @param string $city */
	public function setCity(string $city): void
	{
		$this->city = $city;
	}

	/*** @return string */
	public function getCountry(): string
	{
		return $this->country;
	}

	/*** @param string $country */
	public function setCountry(string $country): void
	{
		$this->country = $country;
	}
}