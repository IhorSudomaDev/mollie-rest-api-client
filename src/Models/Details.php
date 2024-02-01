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

	/*** @param string $consumerName */
	public function setConsumerName(string $consumerName): void
	{
		$this->consumerName = $consumerName;
	}

	/*** @return string */
	public function getConsumerAccount(): string
	{
		return $this->consumerAccount;
	}

	/*** @param string $consumerAccount */
	public function setConsumerAccount(string $consumerAccount): void
	{
		$this->consumerAccount = $consumerAccount;
	}

	/*** @return string */
	public function getConsumerBic(): string
	{
		return $this->consumerBic;
	}

	/*** @param string $consumerBic */
	public function setConsumerBic(string $consumerBic): void
	{
		$this->consumerBic = $consumerBic;
	}
}