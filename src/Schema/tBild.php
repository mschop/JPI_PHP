<?php

namespace App\Schema;

class tBild
{
	const TABLE_NAME = 'tBild';
	const kBild = 'kBild';
	const cQuelle = 'cQuelle';
	const bBild = 'bBild';
	const nDateigroesse = 'nDateigroesse';
	const nBreite = 'nBreite';
	const nHoehe = 'nHoehe';
	const cHash = 'cHash';
	const cChecksum = 'cChecksum';
	const bVorschauBild = 'bVorschauBild';
	const nVorschauDateigroesse = 'nVorschauDateigroesse';
	const nVorschauBreite = 'nVorschauBreite';
	const nVorschauHoehe = 'nVorschauHoehe';
	const dErstellt = 'dErstellt';
	const dAenderung = 'dAenderung';
	const COLUMN_NAMES = [
		'kBild',
		'cQuelle',
		'bBild',
		'nDateigroesse',
		'nBreite',
		'nHoehe',
		'cHash',
		'cChecksum',
		'bVorschauBild',
		'nVorschauDateigroesse',
		'nVorschauBreite',
		'nVorschauHoehe',
		'dErstellt',
		'dAenderung',
	];
	const COLUMN_TYPES = [
		'kBild' => 'int',
		'cQuelle' => 'varchar',
		'bBild' => 'image',
		'nDateigroesse' => 'int',
		'nBreite' => 'int',
		'nHoehe' => 'int',
		'cHash' => 'varchar',
		'cChecksum' => 'varchar',
		'bVorschauBild' => 'image',
		'nVorschauDateigroesse' => 'int',
		'nVorschauBreite' => 'int',
		'nVorschauHoehe' => 'int',
		'dErstellt' => 'datetime',
		'dAenderung' => 'datetime',
	];

	/** @var int kBild */
	public $kBild;

	/** @var string cQuelle */
	public $cQuelle;

	/** @var resource bBild */
	public $bBild;

	/** @var int nDateigroesse */
	public $nDateigroesse;

	/** @var int nBreite */
	public $nBreite;

	/** @var int nHoehe */
	public $nHoehe;

	/** @var string cHash */
	public $cHash;

	/** @var string cChecksum */
	public $cChecksum;

	/** @var resource bVorschauBild */
	public $bVorschauBild;

	/** @var int nVorschauDateigroesse */
	public $nVorschauDateigroesse;

	/** @var int nVorschauBreite */
	public $nVorschauBreite;

	/** @var int nVorschauHoehe */
	public $nVorschauHoehe;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string dAenderung */
	public $dAenderung;
}
