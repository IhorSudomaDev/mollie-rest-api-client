<?php

namespace MollieRestApiClient\Models;

use stdClass;

/**
 * Class Subscription
 * @property string      id
 * @property string      mode
 * @property string      createdAt
 * @property string      status
 * @property Amount      amount
 * @property int         times
 * @property int         timesRemaining
 * @property string      interval
 * @property string      startDate
 * @property string      nextPaymentDate
 * @property string      description
 * @property string|NULL method
 * @property string      mandateId
 * @property string      webhookUrl
 * @property mixed       metadata
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

	/*** @param string $id */
	public function setId(string $id): void
	{
		$this->id = $id;
	}

	/*** @return string */
	public function getMode(): string
	{
		return $this->mode;
	}

	/*** @param string $mode */
	public function setMode(string $mode): void
	{
		$this->mode = $mode;
	}

	/*** @return string */
	public function getCreatedAt(): string
	{
		return $this->createdAt;
	}

	/*** @param string $createdAt */
	public function setCreatedAt(string $createdAt): void
	{
		$this->createdAt = $createdAt;
	}

	/*** @return string */
	public function getStatus(): string
	{
		return $this->status;
	}

	/*** @param string $status */
	public function setStatus(string $status): void
	{
		$this->status = $status;
	}

	/*** @return Amount */
	public function getAmount(): Amount
	{
		return $this->amount;
	}

	/*** @param Amount $amount */
	public function setAmount(Amount $amount): void
	{
		$this->amount = $amount;
	}

	/*** @return int */
	public function getTimes(): int
	{
		return $this->times;
	}

	/*** @param int $times */
	public function setTimes(int $times): void
	{
		$this->times = $times;
	}

	/*** @return int */
	public function getTimesRemaining(): int
	{
		return $this->timesRemaining;
	}

	/*** @param int $timesRemaining */
	public function setTimesRemaining(int $timesRemaining): void
	{
		$this->timesRemaining = $timesRemaining;
	}

	/*** @return string */
	public function getInterval(): string
	{
		return $this->interval;
	}

	/*** @param string $interval */
	public function setInterval(string $interval): void
	{
		$this->interval = $interval;
	}

	/*** @return string */
	public function getStartDate(): string
	{
		return $this->startDate;
	}

	/*** @param string $startDate */
	public function setStartDate(string $startDate): void
	{
		$this->startDate = $startDate;
	}

	/*** @return string */
	public function getNextPaymentDate(): string
	{
		return $this->nextPaymentDate;
	}

	/*** @param string $nextPaymentDate */
	public function setNextPaymentDate(string $nextPaymentDate): void
	{
		$this->nextPaymentDate = $nextPaymentDate;
	}

	/*** @return string */
	public function getDescription(): string
	{
		return $this->description;
	}

	/*** @param string $description */
	public function setDescription(string $description): void
	{
		$this->description = $description;
	}

	/*** @return string|NULL */
	public function getMethod(): ?string
	{
		return $this->method;
	}

	/*** @param string|NULL $method */
	public function setMethod(?string $method): void
	{
		$this->method = $method;
	}

	/*** @return string */
	public function getMandateId(): string
	{
		return $this->mandateId;
	}

	/*** @param string $mandateId */
	public function setMandateId(string $mandateId): void
	{
		$this->mandateId = $mandateId;
	}

	/*** @return string */
	public function getWebhookUrl(): string
	{
		return $this->webhookUrl;
	}

	/*** @param string $webhookUrl */
	public function setWebhookUrl(string $webhookUrl): void
	{
		$this->webhookUrl = $webhookUrl;
	}

	/*** @return mixed */
	public function getMetadata()
	{
		return $this->metadata;
	}

	/*** @param mixed $metadata */
	public function setMetadata($metadata): void
	{
		$this->metadata = $metadata;
	}

	/*** @return stdClass */
	public function getLinks(): stdClass
	{
		return $this->_links;
	}

	/*** @param stdClass $links */
	public function setLinks(stdClass $links): void
	{
		$this->_links = $links;
	}
}