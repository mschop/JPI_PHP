<?php

namespace App\Schema;

class tEigenschaftWertSprache
{
	const TABLE_NAME = 'tEigenschaftWertSprache';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kSprache = 'kSprache';
	const cName = 'cName';

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
