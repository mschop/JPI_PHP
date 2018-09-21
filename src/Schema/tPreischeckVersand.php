<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kArtikel' => 'int',
		'nPlattformTyp' => 'int',
		'nPlattform' => 'int',
		'kPreisId' => 'int',
		'fVersand' => 'decimal',
		'cVergleichspreisformel' => 'nvarchar',
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
