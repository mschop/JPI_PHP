<?php

namespace App\Db\Schema;

class tPreischeckVersand
{
	const TABLE_NAME = 'tPreischeckVersand';
	const kArtikel = 'kArtikel';
	const nPlattformTyp = 'nPlattformTyp';
	const nPlattform = 'nPlattform';
	const kPreisId = 'kPreisId';
	const fVersand = 'fVersand';
	const cVergleichspreisformel = 'cVergleichspreisformel';
	const COLUMN_NAMES = ['kArtikel', 'nPlattformTyp', 'nPlattform', 'kPreisId', 'fVersand', 'cVergleichspreisformel'];
	const COLUMN_DEFINITIONS = [
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPlattformTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPreisId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVersand' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVergleichspreisformel' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'UNICODE',
		],
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int nPlattformTyp */
	public $nPlattformTyp;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var int kPreisId */
	public $kPreisId;

	/** @var string fVersand */
	public $fVersand;

	/** @var resource cVergleichspreisformel */
	public $cVergleichspreisformel;
}
