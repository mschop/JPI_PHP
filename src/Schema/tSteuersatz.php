<?php

namespace App\Schema;

class tSteuersatz
{
	const TABLE_NAME = 'tSteuersatz';
	const kSteuersatz = 'kSteuersatz';
	const kSteuerzone = 'kSteuerzone';
	const kSteuerklasse = 'kSteuerklasse';
	const fSteuersatz = 'fSteuersatz';
	const nPrio = 'nPrio';
	const kStSchl = 'kStSchl';
	const kStSchlIGL = 'kStSchlIGL';
	const kStSchlUStIGL = 'kStSchlUStIGL';

	/** @var int kSteuersatz */
	public $kSteuersatz;

	/** @var int kSteuerzone */
	public $kSteuerzone;

	/** @var int kSteuerklasse */
	public $kSteuerklasse;

	/** @var string fSteuersatz */
	public $fSteuersatz;

	/** @var int nPrio */
	public $nPrio;

	/** @var int kStSchl */
	public $kStSchl;

	/** @var int kStSchlIGL */
	public $kStSchlIGL;

	/** @var int kStSchlUStIGL */
	public $kStSchlUStIGL;
}
