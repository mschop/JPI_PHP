<?php

namespace App\Db\Schema;

class tWMSLagerBereichPlatz
{
	const TABLE_NAME = 'tWMSLagerBereichPlatz';
	const kWMSLagerBereichPlatz = 'kWMSLagerBereichPlatz';
	const kWMSLagerBereich = 'kWMSLagerBereich';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const COLUMN_NAMES = ['kWMSLagerBereichPlatz', 'kWMSLagerBereich', 'kWarenLagerPlatz'];
	const COLUMN_DEFINITIONS = [
		'kWMSLagerBereichPlatz' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWMSLagerBereich' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenLagerPlatz' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWMSLagerBereichPlatz */
	public $kWMSLagerBereichPlatz;

	/** @var int kWMSLagerBereich */
	public $kWMSLagerBereich;

	/** @var int kWarenLagerPlatz */
	public $kWarenLagerPlatz;
}
