<?php

namespace MollieRestApiClient\Models;

use stdClass;

/**
 * Class Payment
 * @property string                 id
 * @property string                 mode
 * @property string                 createdAt
 * @property Amount                 amount
 * @property string                 description
 * @property string|NULL            method
 * @property mixed|NULL             metadata
 * @property string                 status
 * @property string|NULL            canceledAt
 * @property string|NULL            expiredAt
 * @property string|NULL            expiresAt
 * @property string|NULL            failedAt
 * @property string|NULL            paidAt
 * @property string|NULL            dueDate
 * @property string|NULL            billingEmail
 * @property AmountChargedBack|NULL amountChargedBack
 * @property AmountRefunded|NULL    amountRefunded
 * @property AmountRemaining|NULL   amountRemaining
 * @property bool|NULL              isCancelable
 * @property string                 locale
 * @property string|NULL            countryCode
 * @property string                 restrictPaymentMethodsToCountry
 * @property Details|NULL           details
 * @property string                 profileId
 * @property string|NULL            customerId
 * @property string|NULL            mandateId
 * @property string|NULL            orderId
 * @property string|NULL            subscriptionId
 * @property string                 sequenceType
 * @property string|NULL            cancelUrl
 * @property string                 redirectUrl
 * @property string|NULL            webhookUrl
 * @property SettlementAmount       settlementAmount
 * @property stdClass               _links
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

	/*** @return string|NULL */
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

	/*** @return string|NULL */
	public function getCanceledAt(): ?string
	{
		return $this->canceledAt;
	}

	/*** @return string|NULL */
	public function getExpiredAt(): ?string
	{
		return $this->expiredAt;
	}

	/*** @return string|NULL */
	public function getExpiresAt(): ?string
	{
		return $this->expiresAt;
	}

	/*** @return string|NULL */
	public function getFailedAt(): ?string
	{
		return $this->failedAt;
	}

	/*** @return string|NULL */
	public function getPaidAt(): ?string
	{
		return $this->paidAt;
	}

	/*** @return string|NULL */
	public function getDueDate(): ?string
	{
		return $this->dueDate;
	}

	/*** @return string|NULL */
	public function getBillingEmail(): ?string
	{
		return $this->billingEmail;
	}

	/*** @return AmountChargedBack|NULL */
	public function getAmountChargedBack(): ?AmountChargedBack
	{
		return $this->amountChargedBack;
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

	/*** @return Details|NULL */
	public function getDetails(): ?Details
	{
		return $this->details ?? NULL;
	}

	/*** @return string */
	public function getProfileId(): string
	{
		return $this->profileId;
	}

	/*** @return string|NULL */
	public function getCustomerId(): ?string
	{
		return $this->customerId;
	}

	/*** @return string|NULL */
	public function getMandateId(): ?string
	{
		return $this->mandateId;
	}

	/*** @return string|NULL */
	public function getOrderId(): ?string
	{
		return $this->orderId;
	}

	/*** @return string|NULL */
	public function getSubscriptionId(): ?string
	{
		return $this->subscriptionId ?? NULL;
	}

	/*** @return string */
	public function getSequenceType(): string
	{
		return $this->sequenceType;
	}

	/*** @return string|NULL */
	public function getCancelUrl(): ?string
	{
		return $this->cancelUrl;
	}

	/*** @return string */
	public function getRedirectUrl(): string
	{
		return $this->redirectUrl;
	}

	/*** @return string|NULL */
	public function getWebhookUrl(): ?string
	{
		return $this->webhookUrl;
	}

	/*** @return SettlementAmount */
	public function getSettlementAmount(): SettlementAmount
	{
		return $this->settlementAmount;
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