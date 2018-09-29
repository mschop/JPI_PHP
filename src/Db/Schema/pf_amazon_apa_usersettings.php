<?php

namespace App\Db\Schema;

class pf_amazon_apa_usersettings
{
	const TABLE_NAME = 'pf_amazon_apa_usersettings';
	const kUser = 'kUser';
	const fAPAPreisabstand = 'fAPAPreisabstand';
	const nIstAPAPreisabstandProzentual = 'nIstAPAPreisabstandProzentual';
	const nPlattform = 'nPlattform';
	const nAPAShippingTime = 'nAPAShippingTime';
	const nAPASellerPositiveFeedbackRating = 'nAPASellerPositiveFeedbackRating';
	const fAPAPreisabstandFBA = 'fAPAPreisabstandFBA';
	const nIstAPAPreisabstandFBAProzentual = 'nIstAPAPreisabstandFBAProzentual';
	const COLUMN_NAMES = [
		'kUser',
		'fAPAPreisabstand',
		'nIstAPAPreisabstandProzentual',
		'nPlattform',
		'nAPAShippingTime',
		'nAPASellerPositiveFeedbackRating',
		'fAPAPreisabstandFBA',
		'nIstAPAPreisabstandFBAProzentual',
	];
	const COLUMN_DEFINITIONS = [
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAPAPreisabstand' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIstAPAPreisabstandProzentual' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAPAShippingTime' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAPASellerPositiveFeedbackRating' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAPAPreisabstandFBA' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIstAPAPreisabstandFBAProzentual' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kUser */
	public $kUser;

	/** @var string fAPAPreisabstand */
	public $fAPAPreisabstand;

	/** @var int nIstAPAPreisabstandProzentual */
	public $nIstAPAPreisabstandProzentual;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var int nAPAShippingTime */
	public $nAPAShippingTime;

	/** @var int nAPASellerPositiveFeedbackRating */
	public $nAPASellerPositiveFeedbackRating;

	/** @var string fAPAPreisabstandFBA */
	public $fAPAPreisabstandFBA;

	/** @var int nIstAPAPreisabstandFBAProzentual */
	public $nIstAPAPreisabstandFBAProzentual;
}
