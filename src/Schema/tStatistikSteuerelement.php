<?php

namespace App\Schema;

class tStatistikSteuerelement
{
	const TABLE_NAME = 'tStatistikSteuerelement';
	const kStatistikVorlage = 'kStatistikVorlage';
	const cName = 'cName';
	const cValue = 'cValue';

	/** @var int kStatistikVorlage */
	public $kStatistikVorlage;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
