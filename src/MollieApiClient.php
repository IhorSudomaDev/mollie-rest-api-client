<?php

namespace MollieRestApiClient;

use GuzzleHttp\Exception\GuzzleException;
use MollieRestApiClient\Models\Payment;
use MollieRestApiClient\Requests\Customer\CreateCustomerRequest;
use MollieRestApiClient\Requests\Customer\DeleteCustomerRequest;
use MollieRestApiClient\Requests\Customer\GetCustomerListRequest;
use MollieRestApiClient\Requests\Customer\GetCustomerRequest;
use MollieRestApiClient\Requests\Customer\UpdateCustomerRequest;
use MollieRestApiClient\Requests\Mandate\CreateMandateRequest;
use MollieRestApiClient\Requests\Mandate\GetMandateRequest;
use MollieRestApiClient\Requests\Mandate\RevokeMandateRequest;
use MollieRestApiClient\Requests\Organization\GetOrganizationRequest;
use MollieRestApiClient\Requests\Payment\CancelPaymentRequest;
use MollieRestApiClient\Requests\Payment\CreatePaymentRequest;
use MollieRestApiClient\Requests\Payment\GetPaymentListRequest;
use MollieRestApiClient\Requests\Payment\GetPaymentRequest;
use MollieRestApiClient\Requests\Payment\UpdatePaymentRequest;
use MollieRestApiClient\Requests\Profile\CreateProfileRequest;
use MollieRestApiClient\Requests\Profile\DeleteProfileRequest;
use MollieRestApiClient\Requests\Profile\DisablePaymentMethodRequest;
use MollieRestApiClient\Requests\Profile\EnablePaymentMethodRequest;
use MollieRestApiClient\Requests\Profile\GetProfileListRequest;
use MollieRestApiClient\Requests\Profile\GetProfileRequest;
use MollieRestApiClient\Requests\Profile\UpdateProfileRequest;
use MollieRestApiClient\Requests\Subscription\CancelSubscriptionRequest;
use MollieRestApiClient\Requests\Subscription\CreateSubscriptionRequest;
use MollieRestApiClient\Requests\Subscription\GetAllSubscriptionListRequest;
use MollieRestApiClient\Requests\Subscription\GetSubscriptionListRequest;
use MollieRestApiClient\Requests\Subscription\GetSubscriptionRequest;
use MollieRestApiClient\Requests\Subscription\UpdateSubscriptionRequest;
use MollieRestApiClient\ValueObjects\Payment\PaymentStatus;
use RuntimeException;
use Throwable;

/*** Class MollieApiClient */
class MollieApiClient
{
	/*** @var string */
	private string $accessToken;

	/*** @param string $accessToken */
	public function __construct(string $accessToken)
	{
		$this->setAccessToken($accessToken);
	}

	/*** @return string */
	public function getAccessToken(): string
	{
		return $this->accessToken;
	}

	/*** @param string $accessToken */
	public function setAccessToken(string $accessToken): void
	{
		$this->accessToken = $accessToken;
	}

	/**
	 * @param string $organizationId
	 * @return GetOrganizationRequest
	 */
	public function getOrganization(string $organizationId): GetOrganizationRequest
	{
		return new GetOrganizationRequest($this->getAccessToken(), $organizationId);
	}

	/**
	 * @param string $customerId
	 * @return GetCustomerRequest
	 */
	public function getCustomer(string $customerId): GetCustomerRequest
	{
		return new GetCustomerRequest($this->getAccessToken(), $customerId);
	}

	/*** @return GetCustomerListRequest */
	public function getCustomerList(): GetCustomerListRequest
	{
		return new GetCustomerListRequest($this->getAccessToken());
	}

	/*** @return CreateCustomerRequest */
	public function createCustomer(): CreateCustomerRequest
	{
		return new CreateCustomerRequest($this->getAccessToken());
	}

	/**
	 * @param string $customerId
	 * @return UpdateCustomerRequest
	 */
	public function updateCustomer(string $customerId): UpdateCustomerRequest
	{
		return new UpdateCustomerRequest($this->getAccessToken(), $customerId);
	}

	/**
	 * @param string $customerId
	 * @return DeleteCustomerRequest
	 */
	public function deleteCustomer(string $customerId): DeleteCustomerRequest
	{
		return new DeleteCustomerRequest($this->getAccessToken(), $customerId);
	}

	/**
	 * @param string $profileId
	 * @return GetProfileRequest
	 */
	public function getProfile(string $profileId): GetProfileRequest
	{
		return new GetProfileRequest($this->getAccessToken(), $profileId);
	}

	/*** @return GetProfileListRequest */
	public function getProfileList(): GetProfileListRequest
	{
		return new GetProfileListRequest($this->getAccessToken());
	}

	/**
	 * @param string $name
	 * @param string $website
	 * @param string $email
	 * @param string $phone
	 * @return CreateProfileRequest
	 */
	public function createProfile(string $name, string $website, string $email, string $phone): CreateProfileRequest
	{
		return new CreateProfileRequest($this->getAccessToken(), $name, $website, $email, $phone);
	}

	/**
	 * @param string $profileId
	 * @return UpdateProfileRequest
	 */
	public function updateProfile(string $profileId): UpdateProfileRequest
	{
		return new UpdateProfileRequest($this->getAccessToken(), $profileId);
	}

	/**
	 * @param string $profileId
	 * @return DeleteProfileRequest
	 */
	public function deleteProfile(string $profileId): DeleteProfileRequest
	{
		return new DeleteProfileRequest($this->getAccessToken(), $profileId);
	}

	/**
	 * @param string $profileId
	 * @param string $method
	 * @return EnablePaymentMethodRequest
	 */
	public function enablePaymentMethod(string $profileId, string $method): EnablePaymentMethodRequest
	{
		return new EnablePaymentMethodRequest($this->getAccessToken(), $profileId, $method);
	}

	/**
	 * @param string $profileId
	 * @param string $method
	 * @return DisablePaymentMethodRequest
	 */
	public function disablePaymentMethod(string $profileId, string $method): DisablePaymentMethodRequest
	{
		return new DisablePaymentMethodRequest($this->getAccessToken(), $profileId, $method);
	}

	/**
	 * @param string $paymentId
	 * @return GetPaymentRequest
	 */
	public function getPayment(string $paymentId): GetPaymentRequest
	{
		return new GetPaymentRequest($this->getAccessToken(), $paymentId);
	}

	/*** @return GetPaymentListRequest */
	public function getPaymentList(): GetPaymentListRequest
	{
		return new GetPaymentListRequest($this->getAccessToken());
	}

	/**
	 * @param string $profileId
	 * @param string $amount
	 * @param string $description
	 * @param string $redirectUrl
	 * @return CreatePaymentRequest
	 */
	public function createPayment(string $profileId, string $amount, string $description, string $redirectUrl): CreatePaymentRequest
	{
		return new CreatePaymentRequest($this->getAccessToken(), $profileId, $amount, $description, $redirectUrl);
	}

	/**
	 * @param string      $profileId
	 * @param string      $amount
	 * @param string      $description
	 * @param string      $redirectUrl
	 * @param string      $sequenceType
	 * @param string      $customerId
	 * @param string|NULL $mandateId
	 * @return CreatePaymentRequest
	 */
	public function createRecurringPayment(string $profileId, string $amount, string $description, string $redirectUrl, string $sequenceType, string $customerId, ?string $mandateId = NULL): CreatePaymentRequest
	{
		$request = new CreatePaymentRequest($this->getAccessToken(), $profileId, $amount, $description, $redirectUrl);
		$request->makeRecurring($sequenceType, $customerId, $mandateId);
		return $request;
	}

	/**
	 * @param string $paymentId
	 * @return UpdatePaymentRequest
	 */
	public function updatePayment(string $paymentId): UpdatePaymentRequest
	{
		return new UpdatePaymentRequest($this->getAccessToken(), $paymentId);
	}

	/**
	 * @param string $paymentId
	 * @return CancelPaymentRequest
	 */
	public function cancelPayment(string $paymentId): CancelPaymentRequest
	{
		return new CancelPaymentRequest($this->getAccessToken(), $paymentId);
	}

	/**
	 * @param string    $paymentId
	 * @param bool|NULL $isTestMode
	 * @return mixed
	 * @throws Throwable|GuzzleException
	 */
	public function getPaymentCheckoutUrl(string $paymentId, ?bool $isTestMode = FALSE): mixed
	{
		$request = $this->getPayment($paymentId);
		if ($isTestMode) {
			$request->withTestMode();
		}
		/*** @var Payment $payment */
		$payment = $request->send();
		if ($payment->getStatus() === PaymentStatus::EXPIRED) {
			throw new RuntimeException('Checkout URL absent, time has expired');
		}
		return $payment->getLinks()->checkout->href;
	}

	/**
	 * @param string $customerId
	 * @param string $mandateId
	 * @return GetMandateRequest
	 */
	public function getMandate(string $customerId, string $mandateId): GetMandateRequest
	{
		return new GetMandateRequest($this->getAccessToken(), $customerId, $mandateId);
	}

	/**
	 * @param string $customerId
	 * @param string $method
	 * @param string $consumerName
	 * @return CreateMandateRequest
	 */
	public function createMandate(string $customerId, string $method, string $consumerName): CreateMandateRequest
	{
		return new CreateMandateRequest($this->getAccessToken(), $customerId, $method, $consumerName);
	}

	/**
	 * @param string $customerId
	 * @param string $mandateId
	 * @return RevokeMandateRequest
	 */
	public function revokeMandate(string $customerId, string $mandateId): RevokeMandateRequest
	{
		return new RevokeMandateRequest($this->getAccessToken(), $customerId, $mandateId);
	}

	/**
	 * @param string $customerId
	 * @param string $subscriptionId
	 * @return GetSubscriptionRequest
	 */
	public function getSubscription(string $customerId, string $subscriptionId): GetSubscriptionRequest
	{
		return new GetSubscriptionRequest($this->getAccessToken(), $customerId, $subscriptionId);
	}

	/**
	 * @param string $customerId
	 * @param string $amount
	 * @param string $interval
	 * @param string $description
	 * @param string $profileId
	 * @return CreateSubscriptionRequest
	 */
	public function createSubscription(string $customerId, string $amount, string $interval, string $description, string $profileId): CreateSubscriptionRequest
	{
		return new CreateSubscriptionRequest($this->getAccessToken(), $customerId, $amount, $interval, $description, $profileId);
	}

	/**
	 * @param string $customerId
	 * @param string $subscriptionId
	 * @return UpdateSubscriptionRequest
	 */
	public function updateSubscription(string $customerId, string $subscriptionId): UpdateSubscriptionRequest
	{
		return new UpdateSubscriptionRequest($this->getAccessToken(), $customerId, $subscriptionId);
	}

	/**
	 * @param string $customerId
	 * @param string $subscriptionId
	 * @return CancelSubscriptionRequest
	 */
	public function cancelSubscription(string $customerId, string $subscriptionId): CancelSubscriptionRequest
	{
		return new CancelSubscriptionRequest($this->getAccessToken(), $customerId, $subscriptionId);
	}

	/**
	 * @param string $customerId
	 * @param string $profileId
	 * @return GetSubscriptionListRequest
	 */
	public function getSubscriptionList(string $customerId, string $profileId): GetSubscriptionListRequest
	{
		return new GetSubscriptionListRequest($this->getAccessToken(), $customerId, $profileId);
	}

	/*** @return GetAllSubscriptionListRequest */
	public function getAllSubscriptionList(): GetAllSubscriptionListRequest
	{
		return new GetAllSubscriptionListRequest($this->getAccessToken());
	}
}