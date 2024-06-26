<?php

namespace MollieRestApiClient\Traits;

use RuntimeException;

/*** Trait WithPagination */
trait WithPagination
{
	/*** @var int */
	private int $maxLimit = 250;

	/**
	 * @param int $limit
	 * @return int
	 */
	protected function checkLimit(int $limit): int
	{
		if ( ! is_numeric($limit) || $limit < 0) {
			throw new RuntimeException('Incorrect Page parameter');
		}
		if ($limit > $this->maxLimit) {
			throw new RuntimeException('The limit should not exceed 250');
		}
		return $limit;
	}
}