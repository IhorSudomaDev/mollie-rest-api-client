<?php

namespace MollieRestApiClient\Models;

use stdClass;

/**
 * Class Method
 * @property string   id
 * @property string   description
 * @property array    minimumAmount
 * @property array    maximumAmount
 * @property array    image
 * @property string   status
 * @property stdClass _links
 * @package MollieRestApiClient\Models
 */
class Method
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
	public function getDescription(): string
	{
		return $this->description;
	}

	/*** @param string $description */
	public function setDescription(string $description): void
	{
		$this->description = $description;
	}

	/*** @return array */
	public function getMinimumAmount(): array
	{
		return $this->minimumAmount;
	}

	/*** @param array $minimumAmount */
	public function setMinimumAmount(array $minimumAmount): void
	{
		$this->minimumAmount = $minimumAmount;
	}

	/*** @return array */
	public function getMaximumAmount(): array
	{
		return $this->maximumAmount;
	}

	/*** @param array $maximumAmount */
	public function setMaximumAmount(array $maximumAmount): void
	{
		$this->maximumAmount = $maximumAmount;
	}

	/*** @return array */
	public function getImage(): array
	{
		return $this->image;
	}

	/*** @param array $image */
	public function setImage(array $image): void
	{
		$this->image = $image;
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