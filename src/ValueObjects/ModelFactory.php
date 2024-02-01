<?php

namespace MollieRestApiClient\ValueObjects;

use MollieRestApiClient\Models\Address;
use MollieRestApiClient\Models\Amount;
use MollieRestApiClient\Models\Customer;
use MollieRestApiClient\Models\Mandate;
use MollieRestApiClient\Models\Organization;
use MollieRestApiClient\Models\Payment;
use MollieRestApiClient\Models\Profile;
use MollieRestApiClient\Models\Subscription;
use stdClass;
use Throwable;

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
		foreach ($data as $key => $value) {
			if ($value instanceof stdClass) {
				try {
					$modelClass = '\MollieRestApiClient\Models\\' . str_replace('_', '', ucwords($key, '_'));
					if (class_exists($modelClass)) {
						$model->$key = self::create(new $modelClass(), $value);
					} else {
						$model->$key = $value;
					}
				} catch (Throwable $e) {
					echo $e->getMessage();
				}
			} else if (is_array($value)) {
				$model->$key = [];
				foreach ($value as $valueKey => $item) {
					switch ($key) {
						case 'address':
							$newModel = new Address();
							break;
						case 'amount':
							$newModel = new Amount();
							break;
						case 'customer':
							$newModel = new Customer();
							break;
						case 'mandate':
							$newModel = new Mandate();
							break;
						case 'organization':
							$newModel = new Organization();
							break;
						case 'payment':
							$newModel = new Payment();
							break;
						case 'profile':
							$newModel = new Profile();
							break;
						case 'subscription':
							$newModel = new Subscription();
							break;
						default:
							$newModel = new stdClass();
							break;
					}
					try {
						if (is_numeric($valueKey)) {
							$model->$key[] = $item;
						} else {
							$model->$key[] = self::create($newModel, $item);
						}
					} catch (Throwable $e) {
						echo $e->getMessage();
					}
				}
			} else {
				$model->$key = $value;
			}
		}
		return $model;
	}
}