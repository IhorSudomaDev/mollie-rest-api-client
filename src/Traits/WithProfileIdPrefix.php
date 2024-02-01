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
		$resourceIdPrefix = $this->profileIdPrefix;
		if (empty($profileId) || strpos($profileId, $resourceIdPrefix) !== 0) {
			throw new RuntimeException("Invalid profile id: '{$profileId}'. An profile id should start with '" . $resourceIdPrefix . "'.");
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