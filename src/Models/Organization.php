<?php

namespace MollieRestApiClient\Models;

use stdClass;

/**
 * Class Organization
 * @property string   id
 * @property string   name
 * @property string   email
 * @property Address  address
 * @property string   registrationNumber
 * @property string   vatNumber
 * @property stdClass _links
 * @package MollieRestApiClient\Models
 */
class Organization
{
	/*** @return string */
	public function getId(): string
	{
		return $this->id;
	}

	/*** @return string */
	public function getName(): string
	{
		return $this->name;
	}

	/*** @return string */
	public function getEmail(): string
	{
		return $this->email;
	}

	/*** @return Address */
	public function getAddress(): Address
	{
		return $this->address;
	}

	/*** @return string */
	public function getRegistrationNumber(): string
	{
		return $this->registrationNumber;
	}

	/*** @return string */
	public function getVatNumber(): string
	{
		return $this->vatNumber;
	}

	/*** @return stdClass */
	public function getLinks(): stdClass
	{
		return $this->_links;
	}
}