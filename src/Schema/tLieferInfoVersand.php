<?php

namespace App\Schema;

class tLieferInfoVersand
{
	const TABLE_NAME = 'tLieferInfoVersand';
	const kBestellung = 'kBestellung';
	const nStatus = 'nStatus';
	const nStatusEigen = 'nStatusEigen';
	const nStatusBestellt = 'nStatusBestellt';
	const nStatusEigenBestellt = 'nStatusEigenBestellt';
	const nStatusBestelltBlockiert = 'nStatusBestelltBlockiert';
	const nStatusEigenBstelltBlockiert = 'nStatusEigenBstelltBlockiert';
	const COLUMN_NAMES = [
		'kBestellung',
		'nStatus',
		'nStatusEigen',
		'nStatusBestellt',
		'nStatusEigenBestellt',
		'nStatusBestelltBlockiert',
		'nStatusEigenBstelltBlockiert',
	];
	const COLUMN_TYPES = [
		'kBestellung' => 'int',
		'nStatus' => 'int',
		'nStatusEigen' => 'int',
		'nStatusBestellt' => 'int',
		'nStatusEigenBestellt' => 'int',
		'nStatusBestelltBlockiert' => 'int',
		'nStatusEigenBstelltBlockiert' => 'int',
	];

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int nStatus */
	public $nStatus;

	/** @var int nStatusEigen */
	public $nStatusEigen;

	/** @var int nStatusBestellt */
	public $nStatusBestellt;

	/** @var int nStatusEigenBestellt */
	public $nStatusEigenBestellt;

	/** @var int nStatusBestelltBlockiert */
	public $nStatusBestelltBlockiert;

	/** @var int nStatusEigenBstelltBlockiert */
	public $nStatusEigenBstelltBlockiert;
}
