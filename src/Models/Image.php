<?php

namespace MollieRestApiClient\Models;

/**
 * Class Image
 * @property string size1x
 * @property string size2x
 * @property string svg
 * @package MollieRestApiClient\Models
 */
class Image
{
	/*** @return string */
	public function getSize1x(): string
	{
		return $this->size1x;
	}

	/*** @return string */
	public function getSize2x(): string
	{
		return $this->size2x;
	}

	/*** @return string */
	public function getSvg(): string
	{
		return $this->svg;
	}
}