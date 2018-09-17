<?php

namespace App\Schema;

class tWMSLagerBereich
{
	const TABLE_NAME = 'tWMSLagerBereich';
	const kWMSLagerBereich = 'kWMSLagerBereich';
	const cKuerzel = 'cKuerzel';
	const cBeschreibung = 'cBeschreibung';
	const kWarenLager = 'kWarenLager';
	const nTyp = 'nTyp';

	/** @var int kWMSLagerBereich */
	public $kWMSLagerBereich;

	/** @var string cKuerzel */
	public $cKuerzel;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int kWarenLager */
	public $kWarenLager;

	/** @var int nTyp */
	public $nTyp;
}
