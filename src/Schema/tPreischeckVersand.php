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
