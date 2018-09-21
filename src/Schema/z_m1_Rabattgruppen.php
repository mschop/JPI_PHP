<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kRabattGruppe' => 'int',
		'cName' => 'varchar',
		'nS1' => 'int',
		'nR1' => 'int',
		'nS2' => 'int',
		'nR2' => 'int',
		'nS3' => 'int',
		'nR3' => 'int',
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
