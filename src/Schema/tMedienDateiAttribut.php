<?php

namespace App\Schema;

class tMedienDateiAttribut
{
	const TABLE_NAME = 'tMedienDateiAttribut';
	const kMediendateiAttribut = 'kMediendateiAttribut';
	const kMedienDatei = 'kMedienDatei';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cWert = 'cWert';

	/** @var int kMediendateiAttribut */
	public $kMediendateiAttribut;

	/** @var int kMedienDatei */
	public $kMedienDatei;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cWert */
	public $cWert;
}
