<?php

namespace MollieRestApiClient\Models;

/**
 * Class Details
 * @property string consumerName
 * @property string consumerAccount
 * @property string consumerBic
 * @package MollieRestApiClient\Models
 */
class Details
{
	/*** @return string */
	public function getConsumerName(): string
	{
		return $this->consumerName;
	}

	/*** @return string */
	public function getConsumerAccount(): string
	{
		return $this->consumerAccount;
	}

	/*** @return string */
	public function getConsumerBic(): string
	{
		return $this->consumerBic;
	}
}