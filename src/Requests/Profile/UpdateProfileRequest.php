<?php

namespace MollieRestApiClient\Requests\Profile;

use MollieRestApiClient\Requests\Abstracts\ARequest;
use MollieRestApiClient\Responses\Profile\ProfileResponse;
use MollieRestApiClient\Traits\WithProfileIdPrefix;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;
use MollieRestApiClient\ValueObjects\Mode;

/**
 * Class UpdateProfileRequest
 * @package MollieRestApiClient\Requests\Profile
 */
class UpdateProfileRequest extends ARequest
{
	use WithProfileIdPrefix;

	/*** @var string */
	protected string $endpointPrefix = ApiEndpoint::PROFILES_WITH_IDENTIFIER;
	/*** @return string */
	protected string $httpMethod = HttpMethod::HTTP_PATCH;
	/*** @var string */
	protected string $responseClass = ProfileResponse::class;
	/*** @var array */
	protected array $availableInputParameters = [
		'_links' => []
	];

	/**
	 * @param string $accessToken
	 * @param string $profileId
	 */
	public function __construct(string $accessToken, string $profileId)
	{
		parent::__construct($accessToken);
		$this->checkProfileIdPrefix($profileId);
		$this->setProfileId($profileId);
	}

	/**
	 * @param bool $isTestMode
	 * @return $this
	 */
	public function withMode(bool $isTestMode): self
	{
		$this->availableInputParameters['mode'] = $isTestMode ? Mode::TEST : Mode::LIVE;
		return $this;
	}

	/**
	 * @param string $name
	 * @return $this
	 */
	public function withName(string $name): self
	{
		$this->availableInputParameters['name'] = $name;
		return $this;
	}

	/**
	 * @param string $website
	 * @return $this
	 */
	public function withWebsite(string $website): self
	{
		$this->availableInputParameters['website'] = $website;
		return $this;
	}

	/**
	 * @param string $email
	 * @return $this
	 */
	public function withEmail(string $email): self
	{
		$this->availableInputParameters['email'] = $email;
		return $this;
	}

	/**
	 * @param string $phone
	 * @return $this
	 */
	public function withPhone(string $phone): self
	{
		$this->availableInputParameters['phone'] = $phone;
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

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiEndpoint::getFor($this->endpointPrefix), $this->getProfileId());
	}
}