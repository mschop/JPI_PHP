<?php

namespace App\Schema;

class pf_amazon_validation
{
	const TABLE_NAME = 'pf_amazon_validation';
	const cName = 'cName';
	const minLength = 'minLength';
	const maxLength = 'maxLength';
	const cPattern = 'cPattern';
	const cType = 'cType';
	const arraySize = 'arraySize';
	const minOccurs = 'minOccurs';
	const maxOccurs = 'maxOccurs';
	const COLUMN_NAMES = ['cName', 'minLength', 'maxLength', 'cPattern', 'cType', 'arraySize', 'minOccurs', 'maxOccurs'];
	const COLUMN_TYPES = [
		'cName' => 'varchar',
		'minLength' => 'int',
		'maxLength' => 'int',
		'cPattern' => 'varchar',
		'cType' => 'varchar',
		'arraySize' => 'int',
		'minOccurs' => 'int',
		'maxOccurs' => 'int',
	];

	/** @var string cName */
	public $cName;

	/** @var int minLength */
	public $minLength;

	/** @var int maxLength */
	public $maxLength;

	/** @var string cPattern */
	public $cPattern;

	/** @var string cType */
	public $cType;

	/** @var int arraySize */
	public $arraySize;

	/** @var int minOccurs */
	public $minOccurs;

	/** @var int maxOccurs */
	public $maxOccurs;
}
