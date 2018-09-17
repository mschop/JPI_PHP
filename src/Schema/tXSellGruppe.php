<?php

namespace App\Schema;

class tXSellGruppe
{
	const TABLE_NAME = 'tXSellGruppe';
	const kXSellGruppe = 'kXSellGruppe';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';

	/** @var int kXSellGruppe */
	public $kXSellGruppe;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
