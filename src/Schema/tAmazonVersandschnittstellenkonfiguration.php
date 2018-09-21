<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kAmazonVersandschnittstellenkonfiguration' => 'int',
		'kVersandart' => 'int',
		'cVersandartName' => 'varchar',
		'dWeight' => 'decimal',
		'dHeight' => 'decimal',
		'dLength' => 'decimal',
		'dWidth' => 'decimal',
		'nAutoCalcWeight' => 'tinyint',
		'nCarrierWillPickUp' => 'tinyint',
		'fMinWeight' => 'decimal',
		'nAdditionalInsurance' => 'tinyint',
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
