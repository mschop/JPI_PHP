<?php

namespace App\Db\Schema;

class tLLVorlage
{
	const TABLE_NAME = 'tLLVorlage';
	const kLLVorlage = 'kLLVorlage';
	const nTyp = 'nTyp';
	const dDatum = 'dDatum';
	const cKommentar = 'cKommentar';
	const cName = 'cName';
	const bData = 'bData';
	const nDatasize = 'nDatasize';
	const bPreview = 'bPreview';
	const nPreviewsize = 'nPreviewsize';
	const COLUMN_NAMES = [
		'kLLVorlage',
		'nTyp',
		'dDatum',
		'cKommentar',
		'cName',
		'bData',
		'nDatasize',
		'bPreview',
		'nPreviewsize',
	];
	const COLUMN_DEFINITIONS = [
		'kLLVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dDatum' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cKommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'bData' => [
			'type' => 'image',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2147483647,
			'characterSetName' => null,
		],
		'nDatasize' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bPreview' => [
			'type' => 'image',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2147483647,
			'characterSetName' => null,
		],
		'nPreviewsize' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLLVorlage */
	public $kLLVorlage;

	/** @var int nTyp */
	public $nTyp;

	/** @var string dDatum */
	public $dDatum;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var string cName */
	public $cName;

	/** @var resource bData */
	public $bData;

	/** @var int nDatasize */
	public $nDatasize;

	/** @var resource bPreview */
	public $bPreview;

	/** @var int nPreviewsize */
	public $nPreviewsize;
}
