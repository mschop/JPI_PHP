<?php

namespace App\Db\Schema;

class z_m1_Rabattgruppen
{
	const TABLE_NAME = 'z_m1_Rabattgruppen';
	const kRabattGruppe = 'kRabattGruppe';
	const cName = 'cName';
	const nS1 = 'nS1';
	const nR1 = 'nR1';
	const nS2 = 'nS2';
	const nR2 = 'nR2';
	const nS3 = 'nS3';
	const nR3 = 'nR3';
	const COLUMN_NAMES = ['kRabattGruppe', 'cName', 'nS1', 'nR1', 'nS2', 'nR2', 'nS3', 'nR3'];
	const COLUMN_DEFINITIONS = [
		'kRabattGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'nS1' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nR1' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nS2' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nR2' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nS3' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nR3' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kRabattGruppe */
	public $kRabattGruppe;

	/** @var string cName */
	public $cName;

	/** @var int nS1 */
	public $nS1;

	/** @var int nR1 */
	public $nR1;

	/** @var int nS2 */
	public $nS2;

	/** @var int nR2 */
	public $nR2;

	/** @var int nS3 */
	public $nS3;

	/** @var int nR3 */
	public $nR3;
}
