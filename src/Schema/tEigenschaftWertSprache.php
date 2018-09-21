<?php

namespace App\Schema;

class tEigenschaftWertSprache
{
	const TABLE_NAME = 'tEigenschaftWertSprache';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kEigenschaftWert', 'kSprache', 'cName'];
	const COLUMN_TYPES = ['kEigenschaftWert' => 'int', 'kSprache' => 'int', 'cName' => 'varchar'];

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
