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
		$resourceIdPrefix = $this->resourceIdPrefix;
		if (empty($paymentId) || strpos($paymentId, $resourceIdPrefix) !== 0) {
			throw new RuntimeException("Invalid payment id: '{$paymentId}'. An payment id should start with '" . $resourceIdPrefix . "'.");
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