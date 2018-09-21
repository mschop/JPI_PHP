<?php

namespace App\Schema;

class tStatistikSteuerelement
{
	const TABLE_NAME = 'tStatistikSteuerelement';
	const kStatistikVorlage = 'kStatistikVorlage';
	const cName = 'cName';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kStatistikVorlage', 'cName', 'cValue'];
	const COLUMN_TYPES = ['kStatistikVorlage' => 'int', 'cName' => 'varchar', 'cValue' => 'varchar'];

	/** @var int kStatistikVorlage */
	public $kStatistikVorlage;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
