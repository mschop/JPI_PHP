<?php

namespace App\Schema;

class tQueue
{
	const TABLE_NAME = 'tQueue';
	const kShop = 'kShop';
	const kPlattform = 'kPlattform';
	const cName = 'cName';
	const kWert = 'kWert';
	const nAction = 'nAction';
	const kOption1 = 'kOption1';
	const kOption2 = 'kOption2';
	const nInBearbeitung = 'nInBearbeitung';

	/** @var int kShop */
	public $kShop;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var string cName */
	public $cName;

	/** @var int kWert */
	public $kWert;

	/** @var int nAction */
	public $nAction;

	/** @var int kOption1 */
	public $kOption1;

	/** @var int kOption2 */
	public $kOption2;

	/** @var int nInBearbeitung */
	public $nInBearbeitung;
}
