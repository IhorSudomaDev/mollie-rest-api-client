<?php

namespace MollieRestApiClient\Models;

use stdClass;

/**
 * Class Mandate
 * @property string                id
 * @property string                mode
 * @property SettlementAmount|NULL settlementAmount
 * @property string                status
 * @property string                method
 * @property Details               details
 * @property string                customerId
 * @property string                mandateReference
 * @property string                signatureDate
 * @property string                createdAt
 * @property stdClass              _links
 * @package MollieRestApiClient\Models
 */
class Mandate
{
	/*** @return string */
	public function getId(): string
	{
		return $this->id;
	}

	/*** @return string */
	public function getMode(): string
	{
		return $this->mode;
	}

	/*** @return SettlementAmount|NULL */
	public function getSettlementAmount(): ?SettlementAmount
	{
		return $this->settlementAmount;
	}

	/*** @return string */
	public function getStatus(): string
	{
		return $this->status;
	}

	/*** @return string */
	public function getMethod(): string
	{
		return $this->method;
	}

	/*** @return Details */
	public function getDetails(): Details
	{
		return $this->details;
	}

	/*** @return string */
	public function getCustomerId(): string
	{
		return $this->customerId;
	}

	/*** @return string */
	public function getMandateReference(): string
	{
		return $this->mandateReference;
	}

	/*** @return string */
	public function getSignatureDate(): string
	{
		return $this->signatureDate;
	}

	/*** @return string */
	public function getCreatedAt(): string
	{
		return $this->createdAt;
	}

	/*** @return stdClass */
	public function getLinks(): stdClass
	{
		return $this->_links;
	}
}