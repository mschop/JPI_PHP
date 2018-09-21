<?php

namespace App\Schema;

class tShippingDocument
{
	const TABLE_NAME = 'tShippingDocument';
	const kShippingDocument = 'kShippingDocument';
	const kVersand = 'kVersand';
	const nTyp = 'nTyp';
	const bData = 'bData';
	const cHash = 'cHash';
	const dDate = 'dDate';
	const COLUMN_NAMES = ['kShippingDocument', 'kVersand', 'nTyp', 'bData', 'cHash', 'dDate'];
	const COLUMN_TYPES = [
		'kShippingDocument' => 'int',
		'kVersand' => 'int',
		'nTyp' => 'tinyint',
		'bData' => 'image',
		'cHash' => 'varchar',
		'dDate' => 'datetime',
	];

	/** @var int kShippingDocument */
	public $kShippingDocument;

	/** @var int kVersand */
	public $kVersand;

	/** @var int nTyp */
	public $nTyp;

	/** @var resource bData */
	public $bData;

	/** @var string cHash */
	public $cHash;

	/** @var string dDate */
	public $dDate;
}
