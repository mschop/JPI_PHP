<?php

namespace App\Db\Schema;

class pf_amazon_Mapping_AmazonVariationen
{
	const TABLE_NAME = 'pf_amazon_Mapping_AmazonVariationen';
	const kMapping_AmazonVariationen = 'kMapping_AmazonVariationen';
	const cName = 'cName';
	const cDisplayName_50 = 'cDisplayName_50';
	const cDisplayName_51 = 'cDisplayName_51';
	const cDisplayName_52 = 'cDisplayName_52';
	const cDisplayName_53 = 'cDisplayName_53';
	const cDisplayName_54 = 'cDisplayName_54';
	const cDisplayName_55 = 'cDisplayName_55';
	const cDisplayName_56 = 'cDisplayName_56';
	const cDisplayName_57 = 'cDisplayName_57';
	const COLUMN_NAMES = [
		'kMapping_AmazonVariationen',
		'cName',
		'cDisplayName_50',
		'cDisplayName_51',
		'cDisplayName_52',
		'cDisplayName_53',
		'cDisplayName_54',
		'cDisplayName_55',
		'cDisplayName_56',
		'cDisplayName_57',
	];
	const COLUMN_DEFINITIONS = [
		'kMapping_AmazonVariationen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cDisplayName_50' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cDisplayName_51' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cDisplayName_52' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cDisplayName_53' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cDisplayName_54' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cDisplayName_55' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cDisplayName_56' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cDisplayName_57' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kMapping_AmazonVariationen */
	public $kMapping_AmazonVariationen;

	/** @var string cName */
	public $cName;

	/** @var string cDisplayName_50 */
	public $cDisplayName_50;

	/** @var string cDisplayName_51 */
	public $cDisplayName_51;

	/** @var string cDisplayName_52 */
	public $cDisplayName_52;

	/** @var string cDisplayName_53 */
	public $cDisplayName_53;

	/** @var string cDisplayName_54 */
	public $cDisplayName_54;

	/** @var string cDisplayName_55 */
	public $cDisplayName_55;

	/** @var string cDisplayName_56 */
	public $cDisplayName_56;

	/** @var string cDisplayName_57 */
	public $cDisplayName_57;
}
