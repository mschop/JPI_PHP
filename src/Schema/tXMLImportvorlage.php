<?php

namespace App\Schema;

class tXMLImportvorlage
{
	const TABLE_NAME = 'tXMLImportvorlage';
	const kXmlImportvorlage = 'kXmlImportvorlage';
	const nTyp = 'nTyp';
	const cName = 'cName';
	const bVorlage = 'bVorlage';
	const COLUMN_NAMES = ['kXmlImportvorlage', 'nTyp', 'cName', 'bVorlage'];
	const COLUMN_TYPES = ['kXmlImportvorlage' => 'int', 'nTyp' => 'tinyint', 'cName' => 'varchar', 'bVorlage' => 'varchar'];

	/** @var int kXmlImportvorlage */
	public $kXmlImportvorlage;

	/** @var int nTyp */
	public $nTyp;

	/** @var string cName */
	public $cName;

	/** @var string bVorlage */
	public $bVorlage;
}
