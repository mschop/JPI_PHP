<?php

namespace App\Schema;

class tStatistikVorlageOrdner
{
	const TABLE_NAME = 'tStatistikVorlageOrdner';
	const kStatistikVorlageOrdner = 'kStatistikVorlageOrdner';
	const kStatistikVorlageOrdnerParent = 'kStatistikVorlageOrdnerParent';
	const cName = 'cName';
	const nIntern = 'nIntern';

	/** @var int kStatistikVorlageOrdner */
	public $kStatistikVorlageOrdner;

	/** @var int kStatistikVorlageOrdnerParent */
	public $kStatistikVorlageOrdnerParent;

	/** @var string cName */
	public $cName;

	/** @var int nIntern */
	public $nIntern;
}
