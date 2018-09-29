<?php

namespace App\Db\Schema;

class tgutschrifteigenschaft
{
	const TABLE_NAME = 'tgutschrifteigenschaft';
	const kGutschriftEigenschaft = 'kGutschriftEigenschaft';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kGutschriftPos = 'kGutschriftPos';
	const kArtikel = 'kArtikel';
	const fNettoPreis = 'fNettoPreis';
	const COLUMN_NAMES = ['kGutschriftEigenschaft', 'kEigenschaftWert', 'kGutschriftPos', 'kArtikel', 'fNettoPreis'];
	const COLUMN_DEFINITIONS = [
		'kGutschriftEigenschaft' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
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
		'kGutschriftPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fNettoPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kGutschriftEigenschaft */
	public $kGutschriftEigenschaft;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kGutschriftPos */
	public $kGutschriftPos;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fNettoPreis */
	public $fNettoPreis;
}
