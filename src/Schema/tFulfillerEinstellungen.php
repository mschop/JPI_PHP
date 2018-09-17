<?php

namespace App\Schema;

class tFulfillerEinstellungen
{
	const TABLE_NAME = 'tFulfillerEinstellungen';
	const kFulfillerEinstellungen = 'kFulfillerEinstellungen';
	const kLieferant = 'kLieferant';
	const kKunde = 'kKunde';
	const cPrefixAbrechnung = 'cPrefixAbrechnung';
	const cSuffixAbrechnung = 'cSuffixAbrechnung';
	const nAbrechnungsZeitraum = 'nAbrechnungsZeitraum';
	const kAbrechnung = 'kAbrechnung';
	const dAbrechnungInitial = 'dAbrechnungInitial';
	const dAbrechnungStart = 'dAbrechnungStart';
	const dAbrechnungEnde = 'dAbrechnungEnde';
	const nBestandserfassungModus = 'nBestandserfassungModus';

	/** @var int kFulfillerEinstellungen */
	public $kFulfillerEinstellungen;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kKunde */
	public $kKunde;

	/** @var string cPrefixAbrechnung */
	public $cPrefixAbrechnung;

	/** @var string cSuffixAbrechnung */
	public $cSuffixAbrechnung;

	/** @var int nAbrechnungsZeitraum */
	public $nAbrechnungsZeitraum;

	/** @var int kAbrechnung */
	public $kAbrechnung;

	/** @var string dAbrechnungInitial */
	public $dAbrechnungInitial;

	/** @var string dAbrechnungStart */
	public $dAbrechnungStart;

	/** @var string dAbrechnungEnde */
	public $dAbrechnungEnde;

	/** @var int nBestandserfassungModus */
	public $nBestandserfassungModus;
}
