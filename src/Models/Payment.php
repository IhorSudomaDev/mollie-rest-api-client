<?php

namespace MollieRestApiClient\Models;

use stdClass;

/**
 * Class Payment
 * @property string               id
 * @property string               mode
 * @property string               createdAt
 * @property Amount               amount
 * @property string               description
 * @property string|NULL          method
 * @property mixed|NULL           metadata
 * @property string               status
 * @property string|NULL          paidAt
 * @property AmountRefunded|NULL  amountRefunded
 * @property AmountRemaining|NULL amountRemaining
 * @property bool|NULL            isCancelable
 * @property string               locale
 * @property string|NULL          countryCode
 * @property string               restrictPaymentMethodsToCountry
 * @property string|NULL          canceledAt
 * @property string|NULL          expiresAt
 * @property string|NULL          expiredAt
 * @property Details|NULL         details
 * @property string               profileId
 * @property string               sequenceType
 * @property string               redirectUrl
 * @property SettlementAmount     settlementAmount
 * @property string               webhookUrl
 * @property stdClass             _links
 * @package MollieRestApiClient\Models
 */
class Payment
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
	public function getCreatedAt(): string
	{
		return $this->createdAt;
	}

	/*** @return Amount */
	public function getAmount(): Amount
	{
		return $this->amount;
	}

	/*** @return string */
	public function getDescription(): string
	{
		return $this->description;
	}

	/*** @return string|null */
	public function getMethod(): ?string
	{
		return $this->method;
	}

	/*** @return mixed|NULL */
	public function getMetadata()
	{
		return $this->metadata;
	}

	/*** @return string */
	public function getStatus(): string
	{
		return $this->status;
	}

	/*** @return string|null */
	public function getPaidAt(): ?string
	{
		return $this->paidAt;
	}

	/*** @return AmountRefunded|NULL */
	public function getAmountRefunded(): ?AmountRefunded
	{
		return $this->amountRefunded;
	}

	/*** @return AmountRemaining|NULL */
	public function getAmountRemaining(): ?AmountRemaining
	{
		return $this->amountRemaining;
	}

	/*** @return bool|NULL */
	public function getIsCancelable(): ?bool
	{
		return $this->isCancelable;
	}

	/*** @return string */
	public function getLocale(): string
	{
		return $this->locale;
	}

	/*** @return string|NULL */
	public function getCountryCode(): ?string
	{
		return $this->countryCode;
	}

	/*** @return string */
	public function getRestrictPaymentMethodsToCountry(): string
	{
		return $this->restrictPaymentMethodsToCountry;
	}

	/*** @return string|NULL */
	public function getCanceledAt(): ?string
	{
		return $this->canceledAt;
	}

	/*** @return string|NULL */
	public function getExpiresAt(): ?string
	{
		return $this->expiresAt;
	}

	/*** @return string|NULL */
	public function getExpiredAt(): ?string
	{
		return $this->expiredAt;
	}

	/*** @return Details|NULL */
	public function getDetails(): ?Details
	{
		return $this->details;
	}

	/*** @return string */
	public function getProfileId(): string
	{
		return $this->profileId;
	}

	/*** @return string */
	public function getSequenceType(): string
	{
		return $this->sequenceType;
	}

	/*** @return string */
	public function getRedirectUrl(): string
	{
		return $this->redirectUrl;
	}

	/*** @return SettlementAmount */
	public function getSettlementAmount(): SettlementAmount
	{
		return $this->settlementAmount;
	}

	/*** @return string */
	public function getWebhookUrl(): string
	{
		return $this->webhookUrl;
	}

	/*** @return stdClass */
	public function getLinks(): stdClass
	{
		return $this->_links;
	}

	/*** @return string */
	public function getCheckoutUrl(): string
	{
		return $this->getLinks()->checkout->href;
	}
}