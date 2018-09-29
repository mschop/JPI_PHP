<?php

namespace App\Db\Schema;

class ebay_de_zahlungsmethoden
{
	const TABLE_NAME = 'ebay_de_zahlungsmethoden';
	const kEbay_DE_Zahlungsmethoden = 'kEbay_DE_Zahlungsmethoden';
	const PaymentOption = 'PaymentOption';
	const Description = 'Description';
	const DisplayText = 'DisplayText';
	const COLUMN_NAMES = ['kEbay_DE_Zahlungsmethoden', 'PaymentOption', 'Description', 'DisplayText'];
	const COLUMN_DEFINITIONS = [
		'kEbay_DE_Zahlungsmethoden' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'PaymentOption' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Description' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'DisplayText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kEbay_DE_Zahlungsmethoden */
	public $kEbay_DE_Zahlungsmethoden;

	/** @var string PaymentOption */
	public $PaymentOption;

	/** @var string Description */
	public $Description;

	/** @var string DisplayText */
	public $DisplayText;
}
