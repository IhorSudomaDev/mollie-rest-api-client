<?php

namespace MollieRestApiClient\ValueObjects;

/**
 * Class ModelFactory
 * @package MollieRestApiClient\ValueObjects
 */
class ModelFactory
{
	/**
	 * @param $model
	 * @param $data
	 * @return mixed
	 */
	public static function create($model, $data)
	{
		foreach ($data as $property => $propertyValue) {
			$className = '\\MollieRestApiClient\\Models\\' . ucfirst($property);
			if (class_exists($className)) {
				$propertyValue = self::create(new $className(), $propertyValue);
			}
			$model->{$property} = $propertyValue;
		}
		return $model;
	}
}