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

	/*** @param string $resource */
	public function setResource(string $resource): void
	{
		$this->resource = $resource;
	}

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
	public function getMode(): string
	{
		return $this->mode;
	}

	/*** @param string $mode */
	public function setMode(string $mode): void
	{
		$this->mode = $mode;
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
	public function getWebsite(): string
	{
		return $this->website;
	}

	/*** @param string $website */
	public function setWebsite(string $website): void
	{
		$this->website = $website;
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

	/*** @return string */
	public function getPhone(): string
	{
		return $this->phone;
	}

	/*** @param string $phone */
	public function setPhone(string $phone): void
	{
		$this->phone = $phone;
	}

	/*** @return int|NULL */
	public function getCategoryCode(): ?int
	{
		return $this->categoryCode;
	}

	/*** @param int|NULL $categoryCode */
	public function setCategoryCode(?int $categoryCode): void
	{
		$this->categoryCode = $categoryCode;
	}

	/*** @return string|NULL */
	public function getBusinessCategory(): ?string
	{
		return $this->businessCategory;
	}

	/*** @param string|NULL $businessCategory */
	public function setBusinessCategory(?string $businessCategory): void
	{
		$this->businessCategory = $businessCategory;
	}

	/*** @return string */
	public function getStatus(): string
	{
		return $this->status;
	}

	/*** @param string $status */
	public function setStatus(string $status): void
	{
		$this->status = $status;
	}

	/*** @return string */
	public function getCreatedAt(): string
	{
		return $this->createdAt;
	}

	/*** @param string $createdAt */
	public function setCreatedAt(string $createdAt): void
	{
		$this->createdAt = $createdAt;
	}

	/*** @return string|NULL */
	public function getDescription(): ?string
	{
		return $this->description;
	}

	/*** @param string|NULL $description */
	public function setDescription(?string $description): void
	{
		$this->description = $description;
	}

	/*** @return string[] */
	public function getCountriesOfActivity(): array
	{
		return $this->countriesOfActivity;
	}

	/*** @param string[] $countriesOfActivity */
	public function setCountriesOfActivity(array $countriesOfActivity): void
	{
		$this->countriesOfActivity = $countriesOfActivity;
	}

	/*** @return array|NULL */
	public function getReview(): ?array
	{
		return $this->review;
	}

	/*** @param array|NULL $review */
	public function setReview(?array $review): void
	{
		$this->review = $review;
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