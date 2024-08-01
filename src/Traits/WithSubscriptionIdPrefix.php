<?php

namespace MollieRestApiClient\Traits;

use RuntimeException;

/*** Trait WithSubscriptionIdPrefix */
trait WithSubscriptionIdPrefix
{
	/*** @var string */
	protected string $resourceIdPrefix = 'sub_';
	/*** @var string */
	protected string $subscriptionId;

	/*** @param string $subscriptionId */
	protected function checkSubscriptionIdPrefix(string $subscriptionId): void
	{
		if (empty($subscriptionId) || strpos($subscriptionId, $this->resourceIdPrefix) !== 0) {
			throw new RuntimeException(sprintf("Invalid subscription id: '%s'. An subscription id should start with '%s'.", $subscriptionId, $this->resourceIdPrefix));
		}
	}

	/*** @return string */
	public function getSubscriptionId(): string
	{
		return $this->subscriptionId;
	}

	/*** @param string $subscriptionId */
	public function setSubscriptionId(string $subscriptionId): void
	{
		$this->subscriptionId = $subscriptionId;
	}
}