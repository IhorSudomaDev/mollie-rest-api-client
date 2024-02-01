<?php

namespace MollieRestApiClient\Models;

use stdClass;

/**
 * Class Payment
 * @property string        id
 * @property string        mode
 * @property string        createdAt
 * @property Amount        amount
 * @property string        description
 * @property string|NULL   method
 * @property mixed         metadata
 * @property string        status
 * @property string|NULL   paidAt
 * @property stdClass|NULL amountRefunded
 * @property stdClass|NULL amountRemaining
 * @property bool|NULL     isCancelable
 * @property string        locale
 * @property string|NULL   countryCode
 * @property string        restrictPaymentMethodsToCountry
 * @property string|NULL   canceledAt
 * @property string|NULL   expiresAt
 * @property string|NULL   expiredAt
 * @property Details|NULL  details
 * @property string        profileId
 * @property string        sequenceType
 * @property string        redirectUrl
 * @property string        webhookUrl
 * @property stdClass      _links
 * @package MollieRestApiClient\Models
 */
class Payment
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

	/*** @return string|NULL */
	public function getPaidAt(): ?string
	{
		return $this->paidAt;
	}

	/*** @param string|NULL $paidAt */
	public function setPaidAt(?string $paidAt): void
	{
		$this->paidAt = $paidAt;
	}

	/*** @return stdClass|NULL */
	public function getAmountRefunded(): ?stdClass
	{
		return $this->amountRefunded;
	}

	/*** @param stdClass|NULL $amountRefunded */
	public function setAmountRefunded(?stdClass $amountRefunded): void
	{
		$this->amountRefunded = $amountRefunded;
	}

	/*** @return stdClass|NULL */
	public function getAmountRemaining(): ?stdClass
	{
		return $this->amountRemaining;
	}

	/*** @param stdClass|NULL $amountRemaining */
	public function setAmountRemaining(?stdClass $amountRemaining): void
	{
		$this->amountRemaining = $amountRemaining;
	}

	/*** @return bool|NULL */
	public function getIsCancelable(): ?bool
	{
		return $this->isCancelable;
	}

	/*** @param bool|NULL $isCancelable */
	public function setIsCancelable(?bool $isCancelable): void
	{
		$this->isCancelable = $isCancelable;
	}

	/*** @return string */
	public function getLocale(): string
	{
		return $this->locale;
	}

	/*** @param string $locale */
	public function setLocale(string $locale): void
	{
		$this->locale = $locale;
	}

	/*** @return string|NULL */
	public function getCountryCode(): ?string
	{
		return $this->countryCode;
	}

	/*** @param string|NULL $countryCode */
	public function setCountryCode(?string $countryCode): void
	{
		$this->countryCode = $countryCode;
	}

	/*** @return string */
	public function getRestrictPaymentMethodsToCountry(): string
	{
		return $this->restrictPaymentMethodsToCountry;
	}

	/*** @param string $restrictPaymentMethodsToCountry */
	public function setRestrictPaymentMethodsToCountry(string $restrictPaymentMethodsToCountry): void
	{
		$this->restrictPaymentMethodsToCountry = $restrictPaymentMethodsToCountry;
	}

	/*** @return string|NULL */
	public function getCanceledAt(): ?string
	{
		return $this->canceledAt;
	}

	/*** @param string|NULL $canceledAt */
	public function setCanceledAt(?string $canceledAt): void
	{
		$this->canceledAt = $canceledAt;
	}

	/*** @return string|NULL */
	public function getExpiresAt(): ?string
	{
		return $this->expiresAt;
	}

	/*** @param string|NULL $expiresAt */
	public function setExpiresAt(?string $expiresAt): void
	{
		$this->expiresAt = $expiresAt;
	}

	/*** @return string|NULL */
	public function getExpiredAt(): ?string
	{
		return $this->expiredAt;
	}

	/*** @param string|NULL $expiredAt */
	public function setExpiredAt(?string $expiredAt): void
	{
		$this->expiredAt = $expiredAt;
	}

	/*** @return Details|NULL */
	public function getDetails(): ?Details
	{
		return $this->details;
	}

	/*** @param Details|NULL $details */
	public function setDetails(?Details $details): void
	{
		$this->details = $details;
	}

	/*** @return string */
	public function getProfileId(): string
	{
		return $this->profileId;
	}

	/*** @param string $profileId */
	public function setProfileId(string $profileId): void
	{
		$this->profileId = $profileId;
	}

	/*** @return string */
	public function getSequenceType(): string
	{
		return $this->sequenceType;
	}

	/*** @param string $sequenceType */
	public function setSequenceType(string $sequenceType): void
	{
		$this->sequenceType = $sequenceType;
	}

	/*** @return string */
	public function getRedirectUrl(): string
	{
		return $this->redirectUrl;
	}

	/*** @param string $redirectUrl */
	public function setRedirectUrl(string $redirectUrl): void
	{
		$this->redirectUrl = $redirectUrl;
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