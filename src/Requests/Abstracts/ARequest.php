<?php

namespace MollieRestApiClient\Requests\Abstracts;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use MollieRestApiClient\Exceptions\AuthorizationException;
use MollieRestApiClient\Exceptions\ForbiddenException;
use MollieRestApiClient\Exceptions\MollieException;
use MollieRestApiClient\Exceptions\ResourceNotFoundException;
use MollieRestApiClient\Requests\Interfaces\IRequest;
use MollieRestApiClient\ValueObjects\ApiEndpoint;
use MollieRestApiClient\ValueObjects\HttpMethod;
use RuntimeException;
use Throwable;

/*** Class ARequest */
abstract class ARequest implements IRequest
{
	/*** @var Client */
	protected Client $client;
	/*** @var string */
	protected string $accessToken;
	/*** @return string */
	protected string $httpMethod;
	/*** @var string */
	protected string $responseClass;
	/*** @var array */
	protected array $queryParameters = [];
	/*** @var array */
	protected array $availableInputParameters = [];

	/*** @param string $accessToken */
	public function __construct(string $accessToken)
	{
		$this->accessToken = $accessToken;
		$this->client      = new Client();
	}

	/**
	 * @return mixed
	 * @throws Throwable|GuzzleException
	 */
	public function send()
	{
		if ($this->httpMethod === HttpMethod::HTTP_GET) {
			$jsonData = '';
			$data     = $this->getData();
		} else {
			$jsonData = json_encode($this->getData(), JSON_THROW_ON_ERROR);
			$data     = '';
		}
		try {
			$result = $this->client->request(
				$this->httpMethod,
				$this->getUrl(),
				[
					'headers' => [
						'Content-Type'  => 'application/json',
						'Authorization' => 'Bearer ' . $this->accessToken,
					],
					'query'   => $data,
					'body'    => $jsonData,
				]
			);
			switch ($result->getStatusCode()) {
				case 200:
				case 201:
					$resultContent = $result->getBody()->getContents();
					if (empty($resultContent)) {
						$resultContent = '[]';
					}
					return (new $this->responseClass())->get(json_decode($resultContent, FALSE, 512, JSON_THROW_ON_ERROR));
				case 204:
					return 'Successful';
				default:
					throw new RuntimeException('Status Code: ' . $result->getStatusCode());
			}
		} catch (RequestException $e) {
			switch ($e->getCode()) {
				case 401:
					throw new AuthorizationException();
				case 403:
					$errorMessage = $this->getErrorMessage($e);
					throw new ForbiddenException($errorMessage, $e->getCode());
				case 404:
					$errorMessage = $this->getErrorMessage($e);
					throw new ResourceNotFoundException($errorMessage, $e->getCode());
				case 422:
				default:
					$errorMessage = $this->getErrorMessage($e);
					throw new MollieException($errorMessage, $e->getCode());
			}
		} catch (Throwable $e) {
			throw new RuntimeException($e->getMessage(), $e->getCode());
		}
	}

	/*** @return array */
	public function getData(): array
	{
		$parameters = [];
		foreach ($this->availableInputParameters as $key => $value) {
			if ($value !== NULL) {
				$parameters[$key] = $value;
			}
		}
		return $parameters;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return ApiEndpoint::getFor($this->endpointPrefix);
	}

	/**
	 * @param RequestException $e
	 * @return string
	 */
	protected function getErrorMessage(RequestException $e): string
	{
		if ($e->hasResponse() && $e->getResponse() !== NULL) {
			try {
				$response = json_decode($e->getResponse()->getBody(), TRUE, 512, JSON_THROW_ON_ERROR);
				if ( ! empty($response['detail'])) {
					return $response['detail'];
				}
			} catch (Throwable $e) {
				return $e->getMessage();
			}
		}
		return $e->getMessage();
	}
}