<?php

namespace App\Schema;

class tEigenschaftWertAufpreis
{
	const TABLE_NAME = 'tEigenschaftWertAufpreis';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';
	const fAufpreisNetto = 'fAufpreisNetto';
	const COLUMN_NAMES = ['kEigenschaftWert', 'kKundenGruppe', 'kShop', 'fAufpreisNetto'];
	const COLUMN_TYPES = [
		'kEigenschaftWert' => 'int',
		'kKundenGruppe' => 'int',
		'kShop' => 'int',
		'fAufpreisNetto' => 'decimal',
	];

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;

	/** @var string fAufpreisNetto */
	public $fAufpreisNetto;
}
