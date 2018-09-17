<?php

namespace App\Schema;

class tBestellungDokument
{
	const TABLE_NAME = 'tBestellungDokument';
	const kBestellungDokument = 'kBestellungDokument';
	const kBestellung = 'kBestellung';
	const bDokument = 'bDokument';
	const nDokumentTyp = 'nDokumentTyp';
	const nDateigroesse = 'nDateigroesse';
	const cDateierweiterung = 'cDateierweiterung';
	const dErstellt = 'dErstellt';
	const dAenderung = 'dAenderung';

	/** @var int kBestellungDokument */
	public $kBestellungDokument;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var resource bDokument */
	public $bDokument;

	/** @var int nDokumentTyp */
	public $nDokumentTyp;

	/** @var int nDateigroesse */
	public $nDateigroesse;

	/** @var string cDateierweiterung */
	public $cDateierweiterung;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string dAenderung */
	public $dAenderung;
}
