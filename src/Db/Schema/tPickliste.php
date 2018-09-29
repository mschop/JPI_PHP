<?php

namespace App\Db\Schema;

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
	const COLUMN_NAMES = [
		'kPickliste',
		'kWarenLager',
		'kPicklistenVorlage',
		'nStatus',
		'kPicklisteStatus',
		'kPicklisteStatusAngelegt',
		'dGedruckt',
		'kSessionId',
		'kLieferant',
		'kAnsprechpartner',
	];
	const COLUMN_DEFINITIONS = [
		'kPickliste' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenLager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPicklistenVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPicklisteStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPicklisteStatusAngelegt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dGedruckt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSessionId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAnsprechpartner' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

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
