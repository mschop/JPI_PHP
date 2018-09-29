<?php

namespace App\Db\Schema;

class tShippingDocument
{
	const TABLE_NAME = 'tShippingDocument';
	const kShippingDocument = 'kShippingDocument';
	const kVersand = 'kVersand';
	const nTyp = 'nTyp';
	const bData = 'bData';
	const cHash = 'cHash';
	const dDate = 'dDate';
	const COLUMN_NAMES = ['kShippingDocument', 'kVersand', 'nTyp', 'bData', 'cHash', 'dDate'];
	const COLUMN_DEFINITIONS = [
		'kShippingDocument' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVersand' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bData' => [
			'type' => 'image',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 2147483647,
			'characterSetName' => null,
		],
		'cHash' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dDate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kShippingDocument */
	public $kShippingDocument;

	/** @var int kVersand */
	public $kVersand;

	/** @var int nTyp */
	public $nTyp;

	/** @var resource bData */
	public $bData;

	/** @var string cHash */
	public $cHash;

	/** @var string dDate */
	public $dDate;
}
