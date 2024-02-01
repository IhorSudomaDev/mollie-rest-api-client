<?php

namespace MollieRestApiClient\Traits;

use RuntimeException;

/*** Trait WithCustomerIdPrefix */
trait WithCustomerIdPrefix
{
	/*** @var string */
	protected string $customerIdPrefix = 'cst_';
	/*** @var string */
	protected string $customerId;

	/*** @param string $customerId */
	protected function checkCustomerIdPrefix(string $customerId): void
	{
		$resourceIdPrefix = $this->customerIdPrefix;
		if (empty($customerId) || strpos($customerId, $resourceIdPrefix) !== 0) {
			throw new RuntimeException("Invalid customer id: '{$customerId}'. An customer id should start with '" . $resourceIdPrefix . "'.");
		}
	}

	/*** @return string */
	protected function getCustomerId(): string
	{
		return $this->customerId;
	}

	/*** @param string $customerId */
	protected function setCustomerId(string $customerId): void
	{
		$this->customerId = $customerId;
	}
}