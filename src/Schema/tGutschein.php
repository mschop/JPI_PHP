<?php

namespace App\Schema;

class tGutschein
{
	const TABLE_NAME = 'tGutschein';
	const kGutschein = 'kGutschein';
	const kKunde = 'kKunde';
	const kShop = 'kShop';
	const fWert = 'fWert';
	const cGrund = 'cGrund';
	const dErstellt = 'dErstellt';
	const cInet = 'cInet';
	const kInetKunde = 'kInetKunde';
	const COLUMN_NAMES = ['kGutschein', 'kKunde', 'kShop', 'fWert', 'cGrund', 'dErstellt', 'cInet', 'kInetKunde'];
	const COLUMN_TYPES = [
		'kGutschein' => 'int',
		'kKunde' => 'int',
		'kShop' => 'int',
		'fWert' => 'decimal',
		'cGrund' => 'varchar',
		'dErstellt' => 'datetime',
		'cInet' => 'char',
		'kInetKunde' => 'int',
	];

	/** @var int kGutschein */
	public $kGutschein;

	/** @var int kKunde */
	public $kKunde;

	/** @var int kShop */
	public $kShop;

	/** @var string fWert */
	public $fWert;

	/** @var string cGrund */
	public $cGrund;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cInet */
	public $cInet;

	/** @var int kInetKunde */
	public $kInetKunde;
}
