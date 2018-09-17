<?php

namespace App\Schema;

class tUpdateLog
{
	const TABLE_NAME = 'tUpdateLog';
	const kUpdateLog = 'kUpdateLog';
	const cModul = 'cModul';
	const dZeitstempel = 'dZeitstempel';
	const nSchweregrad = 'nSchweregrad';
	const kBenutzer = 'kBenutzer';
	const cMeldung = 'cMeldung';

	/** @var int kUpdateLog */
	public $kUpdateLog;

	/** @var string cModul */
	public $cModul;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int nSchweregrad */
	public $nSchweregrad;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cMeldung */
	public $cMeldung;
}
