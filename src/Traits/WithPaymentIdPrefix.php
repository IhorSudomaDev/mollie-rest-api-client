<?php

namespace MollieRestApiClient\Traits;

use RuntimeException;

/*** Trait WithPaymentIdPrefix */
trait WithPaymentIdPrefix
{
	/*** @var string */
	protected string $resourceIdPrefix = 'tr_';
	/*** @var string */
	protected string $paymentId;

	/*** @param string $paymentId */
	protected function checkPaymentIdPrefix(string $paymentId): void
	{
		if (empty($paymentId) || strpos($paymentId, $this->resourceIdPrefix) !== 0) {
			throw new RuntimeException(sprintf("Invalid payment id: '%s'. An payment id should start with '%s'.", $paymentId, $this->resourceIdPrefix));
		}
	}

	/*** @return string */
	protected function getPaymentId(): string
	{
		return $this->paymentId;
	}

	/*** @param string $paymentId */
	protected function setPaymentId(string $paymentId): void
	{
		$this->paymentId = $paymentId;
	}
}