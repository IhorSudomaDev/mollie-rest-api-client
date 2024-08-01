<?php

namespace MollieRestApiClient\Models;

use stdClass;

/**
 * Class Method
 * @property string        resource
 * @property string        id
 * @property string        description
 * @property MinimumAmount minimumAmount
 * @property MaximumAmount maximumAmount
 * @property Image         image
 * @property string        status
 * @property stdClass      _links
 * @package MollieRestApiClient\Models
 */
class Method
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
	public function getDescription(): string
	{
		return $this->description;
	}

	/*** @return MinimumAmount */
	public function getMinimumAmount(): MinimumAmount
	{
		return $this->minimumAmount;
	}

	/*** @return MaximumAmount */
	public function getMaximumAmount(): MaximumAmount
	{
		return $this->maximumAmount;
	}

	/*** @return Image */
	public function getImage(): Image
	{
		return $this->image;
	}

	/*** @return string */
	public function getStatus(): string
	{
		return $this->status;
	}

	/*** @return stdClass */
	public function getLinks(): stdClass
	{
		return $this->_links;
	}
}