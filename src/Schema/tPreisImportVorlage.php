<?php

namespace App\Schema;

class tPreisImportVorlage
{
	const TABLE_NAME = 'tPreisImportVorlage';
	const kPreisImportVorlage = 'kPreisImportVorlage';
	const cName = 'cName';
	const bZeile = 'bZeile';
	const cTrennzeichen = 'cTrennzeichen';
	const kPlattform = 'kPlattform';
	const kKundengruppe = 'kKundengruppe';
	const nVKNettoberechnen = 'nVKNettoberechnen';
	const fFaktor = 'fFaktor';
	const nSTDVKNetto = 'nSTDVKNetto';
	const cIdent = 'cIdent';
	const kLieferant = 'kLieferant';
	const sMapping = 'sMapping';

	/** @var int kPreisImportVorlage */
	public $kPreisImportVorlage;

	/** @var string cName */
	public $cName;

	/** @var int bZeile */
	public $bZeile;

	/** @var string cTrennzeichen */
	public $cTrennzeichen;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kKundengruppe */
	public $kKundengruppe;

	/** @var int nVKNettoberechnen */
	public $nVKNettoberechnen;

	/** @var string fFaktor */
	public $fFaktor;

	/** @var int nSTDVKNetto */
	public $nSTDVKNetto;

	/** @var string cIdent */
	public $cIdent;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string sMapping */
	public $sMapping;
}
