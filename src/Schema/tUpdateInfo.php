<?php

namespace App\Schema;

class tUpdateInfo
{
	const TABLE_NAME = 'tUpdateInfo';
	const kUpdateInfo = 'kUpdateInfo';
	const nVorgang = 'nVorgang';
	const cKey = 'cKey';
	const cValueOld = 'cValueOld';
	const cValueNew = 'cValueNew';

	/** @var int kUpdateInfo */
	public $kUpdateInfo;

	/** @var int nVorgang */
	public $nVorgang;

	/** @var resource cKey */
	public $cKey;

	/** @var resource cValueOld */
	public $cValueOld;

	/** @var resource cValueNew */
	public $cValueNew;
}
