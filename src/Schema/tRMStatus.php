<?php

namespace App\Schema;

class tRMStatus
{
	const TABLE_NAME = 'tRMStatus';
	const kRMStatus = 'kRMStatus';
	const kRMStatusParent = 'kRMStatusParent';
	const nPos = 'nPos';
	const nAktiv = 'nAktiv';
	const nStatusTyp = 'nStatusTyp';
	const nVisibleMode = 'nVisibleMode';
	const COLUMN_NAMES = ['kRMStatus', 'kRMStatusParent', 'nPos', 'nAktiv', 'nStatusTyp', 'nVisibleMode'];
	const COLUMN_TYPES = [
		'kRMStatus' => 'int',
		'kRMStatusParent' => 'int',
		'nPos' => 'int',
		'nAktiv' => 'tinyint',
		'nStatusTyp' => 'tinyint',
		'nVisibleMode' => 'tinyint',
	];

	/** @var int kRMStatus */
	public $kRMStatus;

	/** @var int kRMStatusParent */
	public $kRMStatusParent;

	/** @var int nPos */
	public $nPos;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var int nStatusTyp */
	public $nStatusTyp;

	/** @var int nVisibleMode */
	public $nVisibleMode;
}
