<?php

namespace App\Db\Schema;

class ebay_coposeigenschaft
{
	const TABLE_NAME = 'ebay_coposeigenschaft';
	const kebay_coposeigenschaft = 'kebay_coposeigenschaft';
	const kEbayCheckoutPos = 'kEbayCheckoutPos';
	const kEigenschaft = 'kEigenschaft';
	const kEigenschaftWert = 'kEigenschaftWert';
	const fAufpreis = 'fAufpreis';
	const COLUMN_NAMES = ['kebay_coposeigenschaft', 'kEbayCheckoutPos', 'kEigenschaft', 'kEigenschaftWert', 'fAufpreis'];
	const COLUMN_DEFINITIONS = [
		'kebay_coposeigenschaft' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayCheckoutPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEigenschaft' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEigenschaftWert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAufpreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kebay_coposeigenschaft */
	public $kebay_coposeigenschaft;

	/** @var int kEbayCheckoutPos */
	public $kEbayCheckoutPos;

	/** @var int kEigenschaft */
	public $kEigenschaft;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var string fAufpreis */
	public $fAufpreis;
}
