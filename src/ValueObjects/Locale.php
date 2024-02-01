<?php

namespace MollieRestApiClient\ValueObjects;

/**
 * Class Locale
 * @package MollieRestApiClient\ValueObjects
 */
class Locale
{
	/*** @var string */
	public const EN_US = 'en_US';
	/*** @var string */
	public const EN_GB = 'en_GB';
	/*** @var string */
	public const NL_NL = 'nl_NL';
	/*** @var string */
	public const NL_BE = 'nl_BE';
	/*** @var string */
	public const FR_FR = 'fr_FR';
	/*** @var string */
	public const FR_BE = 'fr_BE';
	/*** @var string */
	public const DE_DE = 'de_DE';
	/*** @var string */
	public const DE_AT = 'de_AT';
	/*** @var string */
	public const DE_CH = 'de_CH';
	/*** @var string */
	public const ES_ES = 'es_ES';
	/*** @var string */
	public const CA_ES = 'ca_ES';
	/*** @var string */
	public const PT_PT = 'pt_PT';
	/*** @var string */
	public const IT_IT = 'it_IT';
	/*** @var string */
	public const NB_NO = 'nb_NO';
	/*** @var string */
	public const SV_SE = 'sv_SE';
	/*** @var string */
	public const FI_FI = 'fi_FI';
	/*** @var string */
	public const DA_DK = 'da_DK';
	/*** @var string */
	public const IS_IS = 'is_IS';
	/*** @var string */
	public const HU_HU = 'hu_HU';
	/*** @var string */
	public const PL_PL = 'pl_PL';
	/*** @var string */
	public const LV_LV = 'lv_LV';
	/*** @var string */
	public const LT_LT = 'lt_LT';

	/*** @return string[] */
	public static function getPossibleValueList(): array
	{
		return [
			self::CA_ES,
			self::DA_DK,
			self::DE_AT,
			self::DE_CH,
			self::DE_DE,
			self::EN_GB,
			self::EN_US,
			self::ES_ES,
			self::FI_FI,
			self::FR_BE,
			self::FR_FR,
			self::HU_HU,
			self::IS_IS,
			self::IT_IT,
			self::LT_LT,
			self::LV_LV,
			self::NB_NO,
			self::NL_BE,
			self::NL_NL,
			self::PL_PL,
			self::PT_PT,
			self::SV_SE,
		];
	}
}