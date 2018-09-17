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
