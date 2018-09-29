<?php

namespace App\Db\Schema;

class tAmazonVersandschnittstellenkonfiguration
{
	const TABLE_NAME = 'tAmazonVersandschnittstellenkonfiguration';
	const kAmazonVersandschnittstellenkonfiguration = 'kAmazonVersandschnittstellenkonfiguration';
	const kVersandart = 'kVersandart';
	const cVersandartName = 'cVersandartName';
	const dWeight = 'dWeight';
	const dHeight = 'dHeight';
	const dLength = 'dLength';
	const dWidth = 'dWidth';
	const nAutoCalcWeight = 'nAutoCalcWeight';
	const nCarrierWillPickUp = 'nCarrierWillPickUp';
	const fMinWeight = 'fMinWeight';
	const nAdditionalInsurance = 'nAdditionalInsurance';
	const COLUMN_NAMES = [
		'kAmazonVersandschnittstellenkonfiguration',
		'kVersandart',
		'cVersandartName',
		'dWeight',
		'dHeight',
		'dLength',
		'dWidth',
		'nAutoCalcWeight',
		'nCarrierWillPickUp',
		'fMinWeight',
		'nAdditionalInsurance',
	];
	const COLUMN_DEFINITIONS = [
		'kAmazonVersandschnittstellenkonfiguration' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVersandart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVersandartName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dWeight' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dHeight' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLength' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dWidth' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAutoCalcWeight' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nCarrierWillPickUp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMinWeight' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAdditionalInsurance' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kAmazonVersandschnittstellenkonfiguration */
	public $kAmazonVersandschnittstellenkonfiguration;

	/** @var int kVersandart */
	public $kVersandart;

	/** @var string cVersandartName */
	public $cVersandartName;

	/** @var string dWeight */
	public $dWeight;

	/** @var string dHeight */
	public $dHeight;

	/** @var string dLength */
	public $dLength;

	/** @var string dWidth */
	public $dWidth;

	/** @var int nAutoCalcWeight */
	public $nAutoCalcWeight;

	/** @var int nCarrierWillPickUp */
	public $nCarrierWillPickUp;

	/** @var string fMinWeight */
	public $fMinWeight;

	/** @var int nAdditionalInsurance */
	public $nAdditionalInsurance;
}
