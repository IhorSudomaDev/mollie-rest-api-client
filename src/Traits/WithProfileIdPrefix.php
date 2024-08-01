<?php

namespace MollieRestApiClient\Traits;

use RuntimeException;

/*** Trait WithProfileIdPrefix */
trait WithProfileIdPrefix
{
	/*** @var string */
	protected string $profileIdPrefix = 'pfl_';
	/*** @var string */
	protected string $profileId;

	/*** @param string $profileId */
	protected function checkProfileIdPrefix(string $profileId): void
	{
		if (empty($profileId) || strpos($profileId, $this->profileIdPrefix) !== 0) {
			throw new RuntimeException(sprintf("Invalid profile id: '%s'. An profile id should start with '%s'.", $profileId, $this->profileIdPrefix));
		}
	}

	/*** @return string */
	protected function getProfileId(): string
	{
		return $this->profileId;
	}

	/*** @param string $profileId */
	protected function setProfileId(string $profileId): void
	{
		$this->profileId = $profileId;
	}
}