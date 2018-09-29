<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kBild' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cQuelle' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 500,
			'characterSetName' => 'iso_1',
		],
		'bBild' => [
			'type' => 'image',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 2147483647,
			'characterSetName' => null,
		],
		'nDateigroesse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nBreite' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nHoehe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHash' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cChecksum' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'bVorschauBild' => [
			'type' => 'image',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 2147483647,
			'characterSetName' => null,
		],
		'nVorschauDateigroesse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVorschauBreite' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVorschauHoehe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dAenderung' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
