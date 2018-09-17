<?php

namespace App\Schema;

class tbestelleigenschaft
{
	const TABLE_NAME = 'tbestelleigenschaft';
	const kBestellEigenschaft = 'kBestellEigenschaft';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kBestellPos = 'kBestellPos';
	const kArtikel = 'kArtikel';
	const fNettoPreis = 'fNettoPreis';
	const cWert = 'cWert';
	const cName = 'cName';
	const kEigenschaft = 'kEigenschaft';

	/** @var int kBestellEigenschaft */
	public $kBestellEigenschaft;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fNettoPreis */
	public $fNettoPreis;

	/** @var string cWert */
	public $cWert;

	/** @var string cName */
	public $cName;

	/** @var int kEigenschaft */
	public $kEigenschaft;
}
