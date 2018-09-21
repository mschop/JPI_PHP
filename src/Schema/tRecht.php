<?php

namespace App\Schema;

class tRecht
{
	const TABLE_NAME = 'tRecht';
	const kRecht = 'kRecht';
	const cAnzeigeName = 'cAnzeigeName';
	const cBeschreibung = 'cBeschreibung';
	const kRechtVater = 'kRechtVater';
	const nIstLabel = 'nIstLabel';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kRecht', 'cAnzeigeName', 'cBeschreibung', 'kRechtVater', 'nIstLabel', 'nSort'];
	const COLUMN_TYPES = [
		'kRecht' => 'int',
		'cAnzeigeName' => 'varchar',
		'cBeschreibung' => 'varchar',
		'kRechtVater' => 'int',
		'nIstLabel' => 'tinyint',
		'nSort' => 'int',
	];

	/** @var int kRecht */
	public $kRecht;

	/** @var string cAnzeigeName */
	public $cAnzeigeName;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int kRechtVater */
	public $kRechtVater;

	/** @var int nIstLabel */
	public $nIstLabel;

	/** @var int nSort */
	public $nSort;
}
