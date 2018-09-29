<?php

namespace App\Db\Schema;

class tVersandPos
{
	const TABLE_NAME = 'tVersandPos';
	const kVersand = 'kVersand';
	const kLieferscheinPos = 'kLieferscheinPos';
	const fAnzahl = 'fAnzahl';
	const COLUMN_NAMES = ['kVersand', 'kLieferscheinPos', 'fAnzahl'];
	const COLUMN_DEFINITIONS = [
		'kVersand' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferscheinPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kVersand */
	public $kVersand;

	/** @var int kLieferscheinPos */
	public $kLieferscheinPos;

	/** @var string fAnzahl */
	public $fAnzahl;
}
