<?php

namespace App\Schema;

class tinetbestellposeigenschaft
{
	const TABLE_NAME = 'tinetbestellposeigenschaft';
	const kInetBestellPosEigenschaft = 'kInetBestellPosEigenschaft';
	const kInetBestellPos = 'kInetBestellPos';
	const kEigenschaft = 'kEigenschaft';
	const kEigenschaftWert = 'kEigenschaftWert';
	const fAufpreis = 'fAufpreis';
	const cWert = 'cWert';
	const kShop = 'kShop';
	const COLUMN_NAMES = [
		'kInetBestellPosEigenschaft',
		'kInetBestellPos',
		'kEigenschaft',
		'kEigenschaftWert',
		'fAufpreis',
		'cWert',
		'kShop',
	];
	const COLUMN_TYPES = [
		'kInetBestellPosEigenschaft' => 'int',
		'kInetBestellPos' => 'int',
		'kEigenschaft' => 'int',
		'kEigenschaftWert' => 'int',
		'fAufpreis' => 'decimal',
		'cWert' => 'varchar',
		'kShop' => 'int',
	];

	/** @var int kInetBestellPosEigenschaft */
	public $kInetBestellPosEigenschaft;

	/** @var int kInetBestellPos */
	public $kInetBestellPos;

	/** @var int kEigenschaft */
	public $kEigenschaft;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var string fAufpreis */
	public $fAufpreis;

	/** @var string cWert */
	public $cWert;

	/** @var int kShop */
	public $kShop;
}
