<?php

namespace MollieRestApiClient\Models;

use stdClass;

/**
 * Class Profile
 * @property string      resource
 * @property string      id
 * @property string      mode
 * @property string      name
 * @property string      website
 * @property string      email
 * @property string      phone
 * @property int|NULL    categoryCode
 * @property string|NULL businessCategory
 * @property string      status
 * @property string      createdAt
 * @property string|NULL description
 * @property string[]    countriesOfActivity
 * @property array|NULL  review
 * @property stdClass    _links
 * @package MollieRestApiClient\Models
 */
class Profile
{
	/*** @return string */
	public function getResource(): string
	{
		return $this->resource;
	}

	/*** @return string */
	public function getId(): string
	{
		return $this->id;
	}

	/*** @return string */
	public function getMode(): string
	{
		return $this->mode;
	}

	/*** @return string */
	public function getName(): string
	{
		return $this->name;
	}

	/*** @return string */
	public function getWebsite(): string
	{
		return $this->website;
	}

	/*** @return string */
	public function getEmail(): string
	{
		return $this->email;
	}

	/*** @return string */
	public function getPhone(): string
	{
		return $this->phone;
	}

	/*** @return int|NULL */
	public function getCategoryCode(): ?int
	{
		return $this->categoryCode;
	}

	/*** @return string|NULL */
	public function getBusinessCategory(): ?string
	{
		return $this->businessCategory;
	}

	/*** @return string */
	public function getStatus(): string
	{
		return $this->status;
	}

	/*** @return string */
	public function getCreatedAt(): string
	{
		return $this->createdAt;
	}

	/*** @return string|NULL */
	public function getDescription(): ?string
	{
		return $this->description;
	}

	/*** @return string[] */
	public function getCountriesOfActivity(): array
	{
		return $this->countriesOfActivity;
	}

	/*** @return array|NULL */
	public function getReview(): ?array
	{
		return $this->review;
	}

	/*** @return stdClass */
	public function getLinks(): stdClass
	{
		return $this->_links;
	}
}