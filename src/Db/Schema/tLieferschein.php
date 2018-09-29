<?php

namespace App\Db\Schema;

class tLieferschein
{
	const TABLE_NAME = 'tLieferschein';
	const kLieferschein = 'kLieferschein';
	const kBestellung = 'kBestellung';
	const kBenutzer = 'kBenutzer';
	const cLieferscheinNr = 'cLieferscheinNr';
	const cHinweis = 'cHinweis';
	const dMailVersand = 'dMailVersand';
	const dErstellt = 'dErstellt';
	const dGedruckt = 'dGedruckt';
	const nFulfillment = 'nFulfillment';
	const kLieferantenBestellung = 'kLieferantenBestellung';
	const kSessionId = 'kSessionId';
	const COLUMN_NAMES = [
		'kLieferschein',
		'kBestellung',
		'kBenutzer',
		'cLieferscheinNr',
		'cHinweis',
		'dMailVersand',
		'dErstellt',
		'dGedruckt',
		'nFulfillment',
		'kLieferantenBestellung',
		'kSessionId',
	];
	const COLUMN_DEFINITIONS = [
		'kLieferschein' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLieferscheinNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cHinweis' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dMailVersand' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
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
		'nFulfillment' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferantenBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
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
	];

	/** @var int kLieferschein */
	public $kLieferschein;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cLieferscheinNr */
	public $cLieferscheinNr;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var string dMailVersand */
	public $dMailVersand;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string dGedruckt */
	public $dGedruckt;

	/** @var int nFulfillment */
	public $nFulfillment;

	/** @var int kLieferantenBestellung */
	public $kLieferantenBestellung;

	/** @var int kSessionId */
	public $kSessionId;
}
