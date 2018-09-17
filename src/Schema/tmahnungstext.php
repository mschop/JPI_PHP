<?php

namespace App\Schema;

class tmahnungstext
{
	const TABLE_NAME = 'tmahnungstext';
	const kMahnungsText = 'kMahnungsText';
	const cBetreff = 'cBetreff';
	const cAnrede = 'cAnrede';
	const cText = 'cText';
	const nStuffe = 'nStuffe';
	const fGebuehr = 'fGebuehr';

	/** @var int kMahnungsText */
	public $kMahnungsText;

	/** @var string cBetreff */
	public $cBetreff;

	/** @var string cAnrede */
	public $cAnrede;

	/** @var string cText */
	public $cText;

	/** @var int nStuffe */
	public $nStuffe;

	/** @var string fGebuehr */
	public $fGebuehr;
}
