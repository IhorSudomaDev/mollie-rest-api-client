<?php

namespace MollieRestApiClient\Requests\Profile;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Profile\ProfileResponse;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;
use MollieRestApiClient\ValueObjects\Mode;

/**
 * Class CreateCustomerRequest
 * @package MollieRestApiClient\Requests\Profile
 */
class CreateProfileRequest extends ARequest
{
	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::PROFILES;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_POST;
	/*** @var string */
	protected string $responseClass = ProfileResponse::class;
	/*** @var array */
	protected array $availableInputParameters = [];

	/**
	 * @param string $accessToken
	 * @param string $name
	 * @param string $website
	 * @param string $email
	 * @param string $phone
	 */
	public function __construct(string $accessToken, string $name, string $website, string $email, string $phone)
	{
		parent::__construct($accessToken);
		$this->withName($name);
		$this->withWebsite($website);
		$this->withEmail($email);
		$this->withPhone($phone);
	}

	/*** @param string $name */
	private function withName(string $name): void
	{
		$this->availableInputParameters['name'] = $name;
	}

	/*** @param string $website */
	private function withWebsite(string $website): void
	{
		$this->availableInputParameters['website'] = $website;
	}

	/*** @param string $email */
	private function withEmail(string $email): void
	{
		$this->availableInputParameters['email'] = $email;
	}

	/*** @param string $phone */
	private function withPhone(string $phone): void
	{
		$this->availableInputParameters['phone'] = $phone;
	}

	/**
	 * @param array $description
	 * @return $this
	 */
	public function withDescription(array $description): self
	{
		$this->availableInputParameters['description'] = $description;
		return $this;
	}

	/**
	 * @param array $countriesOfActivity
	 * @return $this
	 */
	public function withCountriesOfActivity(array $countriesOfActivity): self
	{
		$this->availableInputParameters['countriesOfActivity'] = $countriesOfActivity;
		return $this;
	}

	/**
	 * @param string $businessCategory
	 * @return $this
	 */
	public function withBusinessCategory(string $businessCategory): self
	{
		$this->availableInputParameters['businessCategory'] = $businessCategory;
		return $this;
	}

	/**
	 * @param bool $isTestMode
	 * @return CreateProfileRequest
	 */
	public function withMode(bool $isTestMode): self
	{
		$this->availableInputParameters['mode'] = $isTestMode ? Mode::TEST : Mode::LIVE;
		return $this;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return ApiEndpoint::getFor($this->endpointPrefix);
	}
}