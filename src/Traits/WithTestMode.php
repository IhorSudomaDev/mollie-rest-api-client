<?php

namespace MollieRestApiClient\Traits;

/*** Trait WithTestMode */
trait WithTestMode
{
	/*** @return $this */
	public function withTestMode(): self
	{
		$this->availableInputParameters['testmode'] = 'true';
		return $this;
	}
}