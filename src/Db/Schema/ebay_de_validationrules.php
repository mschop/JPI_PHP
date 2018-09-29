<?php

namespace App\Db\Schema;

class ebay_de_validationrules
{
	const TABLE_NAME = 'ebay_de_validationrules';
	const AttributeId = 'AttributeId';
	const AttributeSetId = 'AttributeSetId';
	const Name = 'Name';
	const PeerAttributeId = 'PeerAttributeId';
	const cSeparator = 'cSeparator';
	const fMin = 'fMin';
	const fMax = 'fMax';
	const Mask = 'Mask';
	const Precistion = 'Precistion';
	const Regex = 'Regex';
	const nLength = 'nLength';
	const COLUMN_NAMES = [
		'AttributeId',
		'AttributeSetId',
		'Name',
		'PeerAttributeId',
		'cSeparator',
		'fMin',
		'fMax',
		'Mask',
		'Precistion',
		'Regex',
		'nLength',
	];
	const COLUMN_DEFINITIONS = [
		'AttributeId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'AttributeSetId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Name' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'PeerAttributeId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSeparator' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'fMin' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMax' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Mask' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Precistion' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Regex' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'nLength' => [
			'type' => 'smallint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int AttributeId */
	public $AttributeId;

	/** @var int AttributeSetId */
	public $AttributeSetId;

	/** @var string Name */
	public $Name;

	/** @var int PeerAttributeId */
	public $PeerAttributeId;

	/** @var string cSeparator */
	public $cSeparator;

	/** @var string fMin */
	public $fMin;

	/** @var string fMax */
	public $fMax;

	/** @var string Mask */
	public $Mask;

	/** @var int Precistion */
	public $Precistion;

	/** @var string Regex */
	public $Regex;

	/** @var int nLength */
	public $nLength;
}
