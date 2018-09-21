<?php

namespace App\Schema;

class tgutschrifteigenschaft
{
	const TABLE_NAME = 'tgutschrifteigenschaft';
	const kGutschriftEigenschaft = 'kGutschriftEigenschaft';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kGutschriftPos = 'kGutschriftPos';
	const kArtikel = 'kArtikel';
	const fNettoPreis = 'fNettoPreis';
	const COLUMN_NAMES = ['kGutschriftEigenschaft', 'kEigenschaftWert', 'kGutschriftPos', 'kArtikel', 'fNettoPreis'];
	const COLUMN_TYPES = [
		'kGutschriftEigenschaft' => 'int',
		'kEigenschaftWert' => 'int',
		'kGutschriftPos' => 'int',
		'kArtikel' => 'int',
		'fNettoPreis' => 'decimal',
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
