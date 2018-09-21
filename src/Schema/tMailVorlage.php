<?php

namespace App\Schema;

class tMailVorlage
{
	const TABLE_NAME = 'tMailVorlage';
	const kMailVorlage = 'kMailVorlage';
	const kSprache = 'kSprache';
	const nType = 'nType';
	const kPlattform = 'kPlattform';
	const nStandard = 'nStandard';
	const cVorlagenname = 'cVorlagenname';
	const cSubject = 'cSubject';
	const cText = 'cText';
	const nHTML = 'nHTML';
	const cHTML = 'cHTML';
	const COLUMN_NAMES = [
		'kMailVorlage',
		'kSprache',
		'nType',
		'kPlattform',
		'nStandard',
		'cVorlagenname',
		'cSubject',
		'cText',
		'nHTML',
		'cHTML',
	];
	const COLUMN_TYPES = [
		'kMailVorlage' => 'int',
		'kSprache' => 'int',
		'nType' => 'tinyint',
		'kPlattform' => 'int',
		'nStandard' => 'tinyint',
		'cVorlagenname' => 'varchar',
		'cSubject' => 'varchar',
		'cText' => 'varchar',
		'nHTML' => 'tinyint',
		'cHTML' => 'varchar',
	];

	/** @var int kMailVorlage */
	public $kMailVorlage;

	/** @var int kSprache */
	public $kSprache;

	/** @var int nType */
	public $nType;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int nStandard */
	public $nStandard;

	/** @var string cVorlagenname */
	public $cVorlagenname;

	/** @var string cSubject */
	public $cSubject;

	/** @var string cText */
	public $cText;

	/** @var int nHTML */
	public $nHTML;

	/** @var string cHTML */
	public $cHTML;
}
