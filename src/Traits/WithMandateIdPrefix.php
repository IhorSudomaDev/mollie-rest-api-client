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
		if (empty($mandateId) || strpos($mandateId, $this->mandateIdPrefix) !== 0) {
			throw new RuntimeException(sprintf("Invalid mandate id: '%s'. An mandate id should start with '%s'.", $mandateId, $this->mandateIdPrefix));
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