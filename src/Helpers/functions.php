<?php

if ( ! function_exists('convertFloatToStr')) {
	/**
	 * @param float $value
	 * @return string
	 */
	function convertFloatToStr(float $value): string
	{
		$fraction = round($value - (int)$value, 2) * 100;
		return (int)($value) . '.' . str_pad($fraction, 2, "0", STR_PAD_LEFT);
	}
}