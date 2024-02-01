<?php

namespace MollieRestApiClient\Models;

use stdClass;

/**
 * Class Mandate
 * @property string    id
 * @property string    mode
 * @property string    status
 * @property string    method
 * @property Details   details
 * @property string    mandateReference
 * @property string    signatureDate
 * @property string    createdAt
 * @property stdClass _links
 * @package MollieRestApiClient\Models
 */
class Mandate
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
	public function getStatus(): string
	{
		return $this->status;
	}

	/*** @param string $status */
	public function setStatus(string $status): void
	{
		$this->status = $status;
	}

	/*** @return string */
	public function getMethod(): string
	{
		return $this->method;
	}

	/*** @param string $method */
	public function setMethod(string $method): void
	{
		$this->method = $method;
	}

	/*** @return Details */
	public function getDetails(): Details
	{
		return $this->details;
	}

	/*** @param Details $details */
	public function setDetails(Details $details): void
	{
		$this->details = $details;
	}

	/*** @return string */
	public function getMandateReference(): string
	{
		return $this->mandateReference;
	}

	/*** @param string $mandateReference */
	public function setMandateReference(string $mandateReference): void
	{
		$this->mandateReference = $mandateReference;
	}

	/*** @return string */
	public function getSignatureDate(): string
	{
		return $this->signatureDate;
	}

	/*** @param string $signatureDate */
	public function setSignatureDate(string $signatureDate): void
	{
		$this->signatureDate = $signatureDate;
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