<?php

namespace App\Db\Schema;

class pf_amazon_validation
{
	const TABLE_NAME = 'pf_amazon_validation';
	const cName = 'cName';
	const minLength = 'minLength';
	const maxLength = 'maxLength';
	const cPattern = 'cPattern';
	const cType = 'cType';
	const arraySize = 'arraySize';
	const minOccurs = 'minOccurs';
	const maxOccurs = 'maxOccurs';
	const COLUMN_NAMES = ['cName', 'minLength', 'maxLength', 'cPattern', 'cType', 'arraySize', 'minOccurs', 'maxOccurs'];
	const COLUMN_DEFINITIONS = [
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'minLength' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'maxLength' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cPattern' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'arraySize' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'minOccurs' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'maxOccurs' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string cName */
	public $cName;

	/** @var int minLength */
	public $minLength;

	/** @var int maxLength */
	public $maxLength;

	/** @var string cPattern */
	public $cPattern;

	/** @var string cType */
	public $cType;

	/** @var int arraySize */
	public $arraySize;

	/** @var int minOccurs */
	public $minOccurs;

	/** @var int maxOccurs */
	public $maxOccurs;
}
