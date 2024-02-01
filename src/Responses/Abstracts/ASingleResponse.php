<?php

namespace MollieRestApiClient\Responses\Abstracts;

use MollieRestApiClient\Exceptions\NotFoundException;
use MollieRestApiClient\ValueObjects\ModelFactory;

/**
 * Class ASingleResponse
 * @package MollieRestApiClient\Responses\Abstracts
 */
class ASingleResponse extends AResponse
{
	/*** @var string */
	protected string $modelClass;

	/**
	 * @param $result
	 * @return mixed
	 * @throws NotFoundException
	 */
	public function get($result)
	{
		$modelClass = $this->modelClass;
		if (empty($result)) {
			throw new NotFoundException($modelClass);
		}
		$modelName = '\MollieRestApiClient\Models\\' . $modelClass;
		return ModelFactory::create(new $modelName(), $result);
	}
}