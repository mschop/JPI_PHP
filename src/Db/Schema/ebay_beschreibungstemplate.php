<?php

namespace App\Db\Schema;

class ebay_beschreibungstemplate
{
	const TABLE_NAME = 'ebay_beschreibungstemplate';
	const kEbayBeschreibungsTemplate = 'kEbayBeschreibungsTemplate';
	const kEbayuser = 'kEbayuser';
	const kItem = 'kItem';
	const cTitel = 'cTitel';
	const cH1 = 'cH1';
	const cH2 = 'cH2';
	const cBody = 'cBody';
	const cVersandhinweis = 'cVersandhinweis';
	const PaymentInstructions = 'PaymentInstructions';
	const COLUMN_NAMES = [
		'kEbayBeschreibungsTemplate',
		'kEbayuser',
		'kItem',
		'cTitel',
		'cH1',
		'cH2',
		'cBody',
		'cVersandhinweis',
		'PaymentInstructions',
	];
	const COLUMN_DEFINITIONS = [
		'kEbayBeschreibungsTemplate' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayuser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTitel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cH1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cH2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBody' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cVersandhinweis' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'PaymentInstructions' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kEbayBeschreibungsTemplate */
	public $kEbayBeschreibungsTemplate;

	/** @var int kEbayuser */
	public $kEbayuser;

	/** @var int kItem */
	public $kItem;

	/** @var string cTitel */
	public $cTitel;

	/** @var string cH1 */
	public $cH1;

	/** @var string cH2 */
	public $cH2;

	/** @var string cBody */
	public $cBody;

	/** @var string cVersandhinweis */
	public $cVersandhinweis;

	/** @var string PaymentInstructions */
	public $PaymentInstructions;
}
