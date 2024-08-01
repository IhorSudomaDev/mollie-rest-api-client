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
		if (empty($customerId) || strpos($customerId, $this->customerIdPrefix) !== 0) {
			throw new RuntimeException(sprintf("Invalid customer id: '%s'. An customer id should start with '%s'.", $customerId, $this->customerIdPrefix));
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