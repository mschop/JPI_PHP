<?php

namespace App\Schema;

class tWMSBoxenPackVerpackteSerNos
{
	const TABLE_NAME = 'tWMSBoxenPackVerpackteSerNos';
	const kWMSBoxenPackVerpackteSerNos = 'kWMSBoxenPackVerpackteSerNos';
	const kBestellung = 'kBestellung';
	const kBestellPos = 'kBestellPos';
	const kArtikel = 'kArtikel';
	const cSerNo = 'cSerNo';

	/** @var int kWMSBoxenPackVerpackteSerNos */
	public $kWMSBoxenPackVerpackteSerNos;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cSerNo */
	public $cSerNo;
}
