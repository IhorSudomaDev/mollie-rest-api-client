<?php

namespace MollieRestApiClient\Requests\Subscription;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Subscription\SubscriptionResponse;
use MollieRestApiClient\Traits\WithCustomerIdPrefix;
use MollieRestApiClient\Traits\WithProfileIdPrefix;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;
use MollieRestApiClient\ValueObjects\SubscriptionMethod;
use RuntimeException;
use stdClass;

/**
 * Class CreateSubscriptionRequest
 * @package MollieRestApiClient\Requests\Subscription
 */
class CreateSubscriptionRequest extends ARequest
{
	use WithCustomerIdPrefix, WithProfileIdPrefix;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::SUBSCRIPTIONS;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_POST;
	/*** @var string */
	protected string $responseClass = SubscriptionResponse::class;
	/*** @var array */
	protected array $availableInputParameters = [];

	/**
	 * @param string $accessToken
	 * @param string $customerId
	 * @param string $value
	 * @param string $interval
	 * @param string $description
	 * @param string $profileId
	 */
	public function __construct(string $accessToken, string $customerId, string $value, string $interval, string $description, string $profileId)
	{
		parent::__construct($accessToken);
		$this->checkCustomerIdPrefix($customerId);
		$this->setCustomerId($customerId);
		$this->withAmount($value);
		$this->withInterval($interval);
		$this->withDescription($description);
		$this->checkProfileIdPrefix($profileId);
		$this->withProfileId($profileId);
	}

	/*** @param string $value */
	private function withAmount(string $value): void
	{
		$this->availableInputParameters = ['amount' => ['value' => $value, 'currency' => 'EUR']];
	}

	/*** @param string $interval */
	private function withInterval(string $interval): void
	{
		$this->availableInputParameters['interval'] = $interval;
	}

	/*** @param string $description */
	private function withDescription(string $description): void
	{
		$this->availableInputParameters['description'] = $description;
	}

	/**
	 * @param string $profileId
	 * @return void
	 */
	private function withProfileId(string $profileId): void
	{
		$this->availableInputParameters['profileId'] = $profileId;
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
	 * @param string $method
	 * @return $this
	 */
	public function withMethod(string $method): self
	{
		if ( ! in_array($method, SubscriptionMethod::getPossibleValueList(), TRUE)) {
			throw new RuntimeException('Undefined method');
		}
		$this->availableInputParameters['method'] = $method;
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

	/**
	 * @param stdClass $applicationFee
	 * @return $this
	 */
	public function withApplicationFee(stdClass $applicationFee): self
	{
		$this->availableInputParameters['applicationFee'] = $applicationFee;
		return $this;
	}

	/*** @return $this */
	public function withTestMode(): self
	{
		$this->availableInputParameters['testmode'] = TRUE;
		return $this;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), $this->getCustomerId());
	}
}