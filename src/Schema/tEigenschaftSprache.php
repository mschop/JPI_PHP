<?php

namespace App\Schema;

class tEigenschaftSprache
{
	const TABLE_NAME = 'tEigenschaftSprache';
	const kEigenschaft = 'kEigenschaft';
	const kSprache = 'kSprache';
	const cName = 'cName';

	/** @var int kEigenschaft */
	public $kEigenschaft;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
