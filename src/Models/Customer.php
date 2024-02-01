<?php

namespace MollieRestApiClient\Models;

use stdClass;

/**
 * Class Customer
 * @property string   id
 * @property string   mode
 * @property string   name
 * @property string   email
 * @property string   locale
 * @property mixed    metadata
 * @property string   createdAt
 * @property stdClass _links
 * @package MollieRestApiClient\Models
 */
class Customer
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
	public function getLocale(): string
	{
		return $this->locale;
	}

	/*** @param string $locale */
	public function setLocale(string $locale): void
	{
		$this->locale = $locale;
	}

	/*** @return mixed */
	public function getMetadata()
	{
		return $this->metadata;
	}

	/*** @param mixed $metadata */
	public function setMetadata($metadata): void
	{
		$this->metadata = $metadata;
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