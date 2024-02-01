<?php

namespace MollieRestApiClient\Traits;

use RuntimeException;

/*** Trait WithMandateIdPrefix */
trait WithMandateIdPrefix
{
	/*** @var string */
	protected string $mandateIdPrefix = 'mdt_';
	/*** @var string */
	protected string $mandateId;

	/*** @param string $mandateId */
	protected function checkMandateIdPrefix(string $mandateId): void
	{
		$resourceIdPrefix = $this->mandateIdPrefix;
		if (empty($customerId) || strpos($mandateId, $resourceIdPrefix) !== 0) {
			throw new RuntimeException("Invalid mandate id: '{$mandateId}'. An mandate id should start with '" . $resourceIdPrefix . "'.");
		}
	}

	/*** @return string */
	protected function getMandateId(): string
	{
		return $this->mandateId;
	}

	/*** @param string $mandateId */
	protected function setMandateId(string $mandateId): void
	{
		$this->mandateId = $mandateId;
	}
}