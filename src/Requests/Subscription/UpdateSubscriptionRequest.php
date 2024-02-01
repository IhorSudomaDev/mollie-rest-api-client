<?php

namespace MollieRestApiClient\Requests\Subscription;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Subscription\SubscriptionResponse;
use MollieRestApiClient\Traits\WithCustomerIdPrefix;
use MollieRestApiClient\Traits\WithSubscriptionIdPrefix;
use MollieRestApiClient\Traits\WithTestMode;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;

/**
 * Class UpdateSubscriptionRequest
 * @package MollieRestApiClient\Requests\Subscription
 */
class UpdateSubscriptionRequest extends ARequest
{
	use WithCustomerIdPrefix, WithSubscriptionIdPrefix, WithTestMode;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::SUBSCRIPTIONS_WITH_IDENTIFIERS;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_PATCH;
	/*** @var string */
	protected string $responseClass = SubscriptionResponse::class;
	/*** @var array */
	protected array $availableInputParameters = [];

	/**
	 * @param string $accessToken
	 * @param string $customerId
	 * @param string $subscriptionId
	 */
	public function __construct(string $accessToken, string $customerId, string $subscriptionId)
	{
		parent::__construct($accessToken);
		$this->checkCustomerIdPrefix($customerId);
		$this->setCustomerId($customerId);
		$this->checkSubscriptionIdPrefix($subscriptionId);
		$this->setSubscriptionId($subscriptionId);
	}

	/**
	 * @param string $value
	 * @return $this
	 */
	public function withAmount(string $value): self
	{
		$this->availableInputParameters = ['amount' => ['value' => $value, 'currency' => 'EUR']];
		return $this;
	}

	/**
	 * @param string $interval
	 * @return $this
	 */
	public function withInterval(string $interval): self
	{
		$this->availableInputParameters['interval'] = $interval;
		return $this;
	}

	/**
	 * @param string $description
	 * @return $this
	 */
	public function withDescription(string $description): self
	{
		$this->availableInputParameters['description'] = $description;
		return $this;
	}

	/**
	 * @param int $times
	 * @return $this
	 */
	public function withTimes(int $times): self
	{
		$this->availableInputParameters['times'] = $times;
		return $this;
	}

	/**
	 * @param string $startDate
	 * @return $this
	 */
	public function withStartDate(string $startDate): self
	{
		$this->availableInputParameters['startDate'] = $startDate;
		return $this;
	}

	/**
	 * @param string $mandateId
	 * @return $this
	 */
	public function withMandateId(string $mandateId): self
	{
		$this->availableInputParameters['mandateId'] = $mandateId;
		return $this;
	}

	/**
	 * @param string $webhookUrl
	 * @return $this
	 */
	public function withWebhookUrl(string $webhookUrl): self
	{
		$this->availableInputParameters['webhookUrl'] = $webhookUrl;
		return $this;
	}

	/**
	 * @param mixed $metadata
	 * @return $this
	 */
	public function withMetaData($metadata): self
	{
		$this->availableInputParameters['metadata'] = $metadata;
		return $this;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), $this->getCustomerId(), $this->getSubscriptionId());
	}
}