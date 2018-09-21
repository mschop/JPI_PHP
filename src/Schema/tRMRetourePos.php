<?php

namespace App\Schema;

class tRMRetourePos
{
	const TABLE_NAME = 'tRMRetourePos';
	const kRMRetourePos = 'kRMRetourePos';
	const kRMRetoure = 'kRMRetoure';
	const kRMGrund = 'kRMGrund';
	const kRMStatusVerlauf = 'kRMStatusVerlauf';
	const kZustand = 'kZustand';
	const kLieferscheinPos = 'kLieferscheinPos';
	const kBenutzer = 'kBenutzer';
	const cZustandKommentar = 'cZustandKommentar';
	const cGrundKommentar = 'cGrundKommentar';
	const fAnzahl = 'fAnzahl';
	const kArtikel = 'kArtikel';
	const nGutschreiben = 'nGutschreiben';
	const cFfnReturnPosId = 'cFfnReturnPosId';
	const COLUMN_NAMES = [
		'kRMRetourePos',
		'kRMRetoure',
		'kRMGrund',
		'kRMStatusVerlauf',
		'kZustand',
		'kLieferscheinPos',
		'kBenutzer',
		'cZustandKommentar',
		'cGrundKommentar',
		'fAnzahl',
		'kArtikel',
		'nGutschreiben',
		'cFfnReturnPosId',
	];
	const COLUMN_TYPES = [
		'kRMRetourePos' => 'int',
		'kRMRetoure' => 'int',
		'kRMGrund' => 'int',
		'kRMStatusVerlauf' => 'int',
		'kZustand' => 'int',
		'kLieferscheinPos' => 'int',
		'kBenutzer' => 'int',
		'cZustandKommentar' => 'varchar',
		'cGrundKommentar' => 'varchar',
		'fAnzahl' => 'decimal',
		'kArtikel' => 'int',
		'nGutschreiben' => 'tinyint',
		'cFfnReturnPosId' => 'varchar',
	];

	/** @var int kRMRetourePos */
	public $kRMRetourePos;

	/** @var int kRMRetoure */
	public $kRMRetoure;

	/** @var int kRMGrund */
	public $kRMGrund;

	/** @var int kRMStatusVerlauf */
	public $kRMStatusVerlauf;

	/** @var int kZustand */
	public $kZustand;

	/** @var int kLieferscheinPos */
	public $kLieferscheinPos;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cZustandKommentar */
	public $cZustandKommentar;

	/** @var string cGrundKommentar */
	public $cGrundKommentar;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int nGutschreiben */
	public $nGutschreiben;

	/** @var string cFfnReturnPosId */
	public $cFfnReturnPosId;
}
