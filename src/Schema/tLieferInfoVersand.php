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
