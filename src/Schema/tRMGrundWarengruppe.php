<?php

namespace App\Schema;

class tRMGrundWarengruppe
{
	const TABLE_NAME = 'tRMGrundWarengruppe';
	const kRMGrundWarengruppe = 'kRMGrundWarengruppe';
	const kRMGrund = 'kRMGrund';
	const kWarengruppe = 'kWarengruppe';
	const COLUMN_NAMES = ['kRMGrundWarengruppe', 'kRMGrund', 'kWarengruppe'];
	const COLUMN_TYPES = ['kRMGrundWarengruppe' => 'int', 'kRMGrund' => 'int', 'kWarengruppe' => 'int'];

	/** @var int kRMGrundWarengruppe */
	public $kRMGrundWarengruppe;

	/** @var int kRMGrund */
	public $kRMGrund;

	/** @var int kWarengruppe */
	public $kWarengruppe;
}
