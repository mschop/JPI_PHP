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
