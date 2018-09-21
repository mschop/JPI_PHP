<?php

namespace App\Schema;

class tRMGrundKategorie
{
	const TABLE_NAME = 'tRMGrundKategorie';
	const kRMGrundKategorie = 'kRMGrundKategorie';
	const kRMGrund = 'kRMGrund';
	const kKategorie = 'kKategorie';
	const nIstMarkiert = 'nIstMarkiert';
	const COLUMN_NAMES = ['kRMGrundKategorie', 'kRMGrund', 'kKategorie', 'nIstMarkiert'];
	const COLUMN_TYPES = [
		'kRMGrundKategorie' => 'int',
		'kRMGrund' => 'int',
		'kKategorie' => 'int',
		'nIstMarkiert' => 'tinyint',
	];

	/** @var int kRMGrundKategorie */
	public $kRMGrundKategorie;

	/** @var int kRMGrund */
	public $kRMGrund;

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int nIstMarkiert */
	public $nIstMarkiert;
}
