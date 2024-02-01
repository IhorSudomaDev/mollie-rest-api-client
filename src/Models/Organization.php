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

	/*** @param string $id */
	public function setId(string $id): void
	{
		$this->id = $id;
	}

	/*** @return string */
	public function getName(): string
	{
		return $this->name;
	}

	/*** @param string $name */
	public function setName(string $name): void
	{
		$this->name = $name;
	}

	/*** @return string */
	public function getEmail(): string
	{
		return $this->email;
	}

	/*** @param string $email */
	public function setEmail(string $email): void
	{
		$this->email = $email;
	}

	/*** @return Address */
	public function getAddress(): Address
	{
		return $this->address;
	}

	/*** @param Address $address */
	public function setAddress(Address $address): void
	{
		$this->address = $address;
	}

	/*** @return string */
	public function getRegistrationNumber(): string
	{
		return $this->registrationNumber;
	}

	/*** @param string $registrationNumber */
	public function setRegistrationNumber(string $registrationNumber): void
	{
		$this->registrationNumber = $registrationNumber;
	}

	/*** @return string */
	public function getVatNumber(): string
	{
		return $this->vatNumber;
	}

	/*** @param string $vatNumber */
	public function setVatNumber(string $vatNumber): void
	{
		$this->vatNumber = $vatNumber;
	}

	/*** @return stdClass */
	public function getLinks(): stdClass
	{
		return $this->_links;
	}

	/*** @param stdClass $links */
	public function setLinks(stdClass $links): void
	{
		$this->_links = $links;
	}
}