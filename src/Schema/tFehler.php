<?php

namespace App\Schema;

class tFehler
{
	const TABLE_NAME = 'tFehler';
	const kFehler = 'kFehler';
	const kSessionId = 'kSessionId';
	const cText = 'cText';
	const nValue1 = 'nValue1';
	const nValue2 = 'nValue2';
	const nValue3 = 'nValue3';
	const cValue1 = 'cValue1';
	const cValue2 = 'cValue2';
	const cValue3 = 'cValue3';
	const kkey1 = 'kkey1';
	const kkey2 = 'kkey2';
	const COLUMN_NAMES = [
		'kFehler',
		'kSessionId',
		'cText',
		'nValue1',
		'nValue2',
		'nValue3',
		'cValue1',
		'cValue2',
		'cValue3',
		'kkey1',
		'kkey2',
	];
	const COLUMN_TYPES = [
		'kFehler' => 'int',
		'kSessionId' => 'int',
		'cText' => 'varchar',
		'nValue1' => 'int',
		'nValue2' => 'int',
		'nValue3' => 'int',
		'cValue1' => 'varchar',
		'cValue2' => 'varchar',
		'cValue3' => 'varchar',
		'kkey1' => 'int',
		'kkey2' => 'int',
	];

	/** @var int kFehler */
	public $kFehler;

	/** @var int kSessionId */
	public $kSessionId;

	/** @var string cText */
	public $cText;

	/** @var int nValue1 */
	public $nValue1;

	/** @var int nValue2 */
	public $nValue2;

	/** @var int nValue3 */
	public $nValue3;

	/** @var string cValue1 */
	public $cValue1;

	/** @var string cValue2 */
	public $cValue2;

	/** @var string cValue3 */
	public $cValue3;

	/** @var int kkey1 */
	public $kkey1;

	/** @var int kkey2 */
	public $kkey2;
}
