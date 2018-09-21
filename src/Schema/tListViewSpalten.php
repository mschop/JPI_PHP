<?php

namespace App\Schema;

class tListViewSpalten
{
	const TABLE_NAME = 'tListViewSpalten';
	const kListView = 'kListView';
	const nPos = 'nPos';
	const cWert = 'cWert';
	const kBenutzer = 'kBenutzer';
	const COLUMN_NAMES = ['kListView', 'nPos', 'cWert', 'kBenutzer'];
	const COLUMN_TYPES = ['kListView' => 'int', 'nPos' => 'int', 'cWert' => 'varchar', 'kBenutzer' => 'int'];

	/** @var int kListView */
	public $kListView;

	/** @var int nPos */
	public $nPos;

	/** @var string cWert */
	public $cWert;

	/** @var int kBenutzer */
	public $kBenutzer;
}
