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
		$resourceIdPrefix = $this->resourceIdPrefix;
		if (empty($profileId) || strpos($profileId, $resourceIdPrefix) !== 0) {
			throw new RuntimeException("Invalid subscription id: '{$subscriptionId}'. An subscription id should start with '" . $subscriptionId . "'.");
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