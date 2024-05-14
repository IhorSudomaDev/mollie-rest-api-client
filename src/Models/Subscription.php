<?php

namespace MollieRestApiClient\Models;

use stdClass;

/**
 * Class Subscription
 * @property string      id
 * @property string      mode
 * @property string      customerId
 * @property string      createdAt
 * @property string      status
 * @property Amount      amount
 * @property int|NULL    times
 * @property int|NULL    timesRemaining
 * @property string      interval
 * @property string      startDate
 * @property string      nextPaymentDate
 * @property string      description
 * @property string|NULL method
 * @property string|NULL mandateId
 * @property string      webhookUrl
 * @property mixed|NULL  metadata
 * @property string|NULL canceledAt
 * @property stdClass    _links
 * @package MollieRestApiClient\Models
 */
class Subscription
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

	/*** @return string */
	public function getCustomerId(): string
	{
		return $this->customerId;
	}

	/*** @return string */
	public function getCreatedAt(): string
	{
		return $this->createdAt;
	}

	/*** @return string */
	public function getStatus(): string
	{
		return $this->status;
	}

	/*** @return Amount */
	public function getAmount(): Amount
	{
		return $this->amount;
	}

	/*** @return int|NULL */
	public function getTimes(): ?int
	{
		return $this->times;
	}

	/*** @return int|NULL */
	public function getTimesRemaining(): ?int
	{
		return $this->timesRemaining;
	}

	/*** @return string */
	public function getInterval(): string
	{
		return $this->interval;
	}

	/*** @return string */
	public function getStartDate(): string
	{
		return $this->startDate;
	}

	/*** @return string */
	public function getNextPaymentDate(): string
	{
		return $this->nextPaymentDate;
	}

	/*** @return string */
	public function getDescription(): string
	{
		return $this->description;
	}

	/*** @return string|NULL */
	public function getMethod(): ?string
	{
		return $this->method;
	}

	/*** @return string|NULL */
	public function getMandateId(): ?string
	{
		return $this->mandateId;
	}

	/*** @return string */
	public function getWebhookUrl(): string
	{
		return $this->webhookUrl;
	}

	/*** @return mixed|NULL */
	public function getMetadata()
	{
		return $this->metadata;
	}

	/*** @return string|NULL */
	public function getCanceledAt(): ?string
	{
		return $this->canceledAt;
	}

	/*** @return stdClass */
	public function getLinks(): stdClass
	{
		return $this->_links;
	}
}