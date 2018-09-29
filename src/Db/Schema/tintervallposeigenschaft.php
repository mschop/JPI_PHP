<?php

namespace App\Db\Schema;

class tintervallposeigenschaft
{
	const TABLE_NAME = 'tintervallposeigenschaft';
	const kIntervallPos = 'kIntervallPos';
	const kBestellEigenschaft = 'kBestellEigenschaft';
	const COLUMN_NAMES = ['kIntervallPos', 'kBestellEigenschaft'];
	const COLUMN_DEFINITIONS = [
		'kIntervallPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellEigenschaft' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kIntervallPos */
	public $kIntervallPos;

	/** @var int kBestellEigenschaft */
	public $kBestellEigenschaft;
}
