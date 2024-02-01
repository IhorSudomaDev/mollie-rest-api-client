<?php

namespace MollieRestApiClient\Responses\Abstracts;

use MollieRestApiClient\ValueObjects\ModelFactory;

/**
 * Class AListResponse
 * @package MollieRestApiClient\Responses\Abstracts
 */
class AListResponse extends AResponse
{
	/*** @var string */
	protected string $modelClass;

	/**
	 * @param $result
	 * @return array
	 */
	public function get($result): array
	{
		$list       = [];
		$modelClass = $this->modelClass;
		$modelName  = '\MollieRestApiClient\Models\\' . $modelClass;
		if ( ! empty($result)) {
			$property = sprintf('%ss', strtolower($modelClass));
			$preparedList = $result->_embedded->$property;
			foreach ($preparedList as $object) {
				$list[] = ModelFactory::create(new $modelName(), $object);
			}
		}
		return $list;
	}
}