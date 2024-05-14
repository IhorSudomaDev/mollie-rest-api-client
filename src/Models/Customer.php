<?php

namespace MollieRestApiClient\Models;

use stdClass;

/**
 * Class Customer
 * @property string      id
 * @property string      mode
 * @property string      name
 * @property string      email
 * @property string|NULL locale
 * @property mixed|NULL  metadata
 * @property string      createdAt
 * @property stdClass    _links
 * @package MollieRestApiClient\Models
 */
class Customer
{
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
	public function getEmail(): string
	{
		return $this->email;
	}

	/*** @return string */
	public function getLocale(): string
	{
		return $this->locale;
	}

	/*** @return mixed */
	public function getMetadata()
	{
		return $this->metadata;
	}

	/*** @return string */
	public function getCreatedAt(): string
	{
		return $this->createdAt;
	}

	/*** @return stdClass */
	public function getLinks(): stdClass
	{
		return $this->_links;
	}
}