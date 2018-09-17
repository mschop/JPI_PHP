<?php

namespace App\Schema;

class tPickliste
{
	const TABLE_NAME = 'tPickliste';
	const kPickliste = 'kPickliste';
	const kWarenLager = 'kWarenLager';
	const kPicklistenVorlage = 'kPicklistenVorlage';
	const nStatus = 'nStatus';
	const kPicklisteStatus = 'kPicklisteStatus';
	const kPicklisteStatusAngelegt = 'kPicklisteStatusAngelegt';
	const dGedruckt = 'dGedruckt';
	const kSessionId = 'kSessionId';
	const kLieferant = 'kLieferant';
	const kAnsprechpartner = 'kAnsprechpartner';

	/** @var int kPickliste */
	public $kPickliste;

	/** @var int kWarenLager */
	public $kWarenLager;

	/** @var int kPicklistenVorlage */
	public $kPicklistenVorlage;

	/** @var int nStatus */
	public $nStatus;

	/** @var int kPicklisteStatus */
	public $kPicklisteStatus;

	/** @var int kPicklisteStatusAngelegt */
	public $kPicklisteStatusAngelegt;

	/** @var string dGedruckt */
	public $dGedruckt;

	/** @var int kSessionId */
	public $kSessionId;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kAnsprechpartner */
	public $kAnsprechpartner;
}
