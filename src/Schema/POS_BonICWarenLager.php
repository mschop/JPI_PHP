<?php

namespace App\Schema;

class POS_BonICWarenLager
{
	const TABLE_NAME = 'POS_BonICWarenLager';
	const kBonICWarenLager = 'kBonICWarenLager';
	const kBonIC = 'kBonIC';
	const kWarenLager = 'kWarenLager';
	const COLUMN_NAMES = ['kBonICWarenLager', 'kBonIC', 'kWarenLager'];
	const COLUMN_TYPES = ['kBonICWarenLager' => 'int', 'kBonIC' => 'int', 'kWarenLager' => 'int'];

	/** @var int kBonICWarenLager */
	public $kBonICWarenLager;

	/** @var int kBonIC */
	public $kBonIC;

	/** @var int kWarenLager */
	public $kWarenLager;
}
