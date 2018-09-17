<?php

namespace App\Schema;

class ebay_de_geb_erweiterungen
{
	const TABLE_NAME = 'ebay_de_geb_erweiterungen';
	const kEbay_DE_Geb_Erweiterungen = 'kEbay_DE_Geb_Erweiterungen';
	const Enhancement = 'Enhancement';
	const mehrereArtikel = 'mehrereArtikel';
	const Gebuehr = 'Gebuehr';

	/** @var int kEbay_DE_Geb_Erweiterungen */
	public $kEbay_DE_Geb_Erweiterungen;

	/** @var string Enhancement */
	public $Enhancement;

	/** @var int mehrereArtikel */
	public $mehrereArtikel;

	/** @var string Gebuehr */
	public $Gebuehr;
}
