<?php

namespace App\Schema;

class tRMGrundWarengruppe
{
	const TABLE_NAME = 'tRMGrundWarengruppe';
	const kRMGrundWarengruppe = 'kRMGrundWarengruppe';
	const kRMGrund = 'kRMGrund';
	const kWarengruppe = 'kWarengruppe';

	/** @var int kRMGrundWarengruppe */
	public $kRMGrundWarengruppe;

	/** @var int kRMGrund */
	public $kRMGrund;

	/** @var int kWarengruppe */
	public $kWarengruppe;
}
