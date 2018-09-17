<?php

namespace App\Schema;

class tDTAUS
{
	const TABLE_NAME = 'tDTAUS';
	const cName = 'cName';
	const cZeile1 = 'cZeile1';
	const cZeile2 = 'cZeile2';
	const nZahlung = 'nZahlung';
	const cKontoInhaber = 'cKontoInhaber';
	const cBLZ = 'cBLZ';
	const cKontoNr = 'cKontoNr';

	/** @var string cName */
	public $cName;

	/** @var string cZeile1 */
	public $cZeile1;

	/** @var string cZeile2 */
	public $cZeile2;

	/** @var int nZahlung */
	public $nZahlung;

	/** @var string cKontoInhaber */
	public $cKontoInhaber;

	/** @var string cBLZ */
	public $cBLZ;

	/** @var string cKontoNr */
	public $cKontoNr;
}
