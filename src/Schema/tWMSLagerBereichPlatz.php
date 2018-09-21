<?php

namespace App\Schema;

class tWMSLagerBereichPlatz
{
	const TABLE_NAME = 'tWMSLagerBereichPlatz';
	const kWMSLagerBereichPlatz = 'kWMSLagerBereichPlatz';
	const kWMSLagerBereich = 'kWMSLagerBereich';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const COLUMN_NAMES = ['kWMSLagerBereichPlatz', 'kWMSLagerBereich', 'kWarenLagerPlatz'];
	const COLUMN_TYPES = ['kWMSLagerBereichPlatz' => 'int', 'kWMSLagerBereich' => 'int', 'kWarenLagerPlatz' => 'int'];

	/** @var int kWMSLagerBereichPlatz */
	public $kWMSLagerBereichPlatz;

	/** @var int kWMSLagerBereich */
	public $kWMSLagerBereich;

	/** @var int kWarenLagerPlatz */
	public $kWarenLagerPlatz;
}
