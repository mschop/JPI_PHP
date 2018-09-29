<?php

namespace App\Db\Schema;

class ebay_de_attribute
{
	const TABLE_NAME = 'ebay_de_attribute';
	const AttributeId = 'AttributeId';
	const AttributeSetId = 'AttributeSetId';
	const parentAttrId = 'parentAttrId';
	const defaultValueId = 'defaultValueId';
	const Label = 'Label';
	const labelVisible = 'labelVisible';
	const isRequired = 'isRequired';
	const dateFormat = 'dateFormat';
	const WhenToShow = 'WhenToShow';
	const EditType = 'EditType';
	const Type = 'Type';
	const presentationType = 'presentationType';
	const maxlength = 'maxlength';
	const ordernumber = 'ordernumber';
	const COLUMN_NAMES = [
		'AttributeId',
		'AttributeSetId',
		'parentAttrId',
		'defaultValueId',
		'Label',
		'labelVisible',
		'isRequired',
		'dateFormat',
		'WhenToShow',
		'EditType',
		'Type',
		'presentationType',
		'maxlength',
		'ordernumber',
	];
	const COLUMN_DEFINITIONS = [
		'AttributeId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'AttributeSetId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'parentAttrId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'defaultValueId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Label' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'labelVisible' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'isRequired' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'dateFormat' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'WhenToShow' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'EditType' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Type' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'presentationType' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'maxlength' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ordernumber' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int AttributeId */
	public $AttributeId;

	/** @var int AttributeSetId */
	public $AttributeSetId;

	/** @var int parentAttrId */
	public $parentAttrId;

	/** @var int defaultValueId */
	public $defaultValueId;

	/** @var string Label */
	public $Label;

	/** @var string labelVisible */
	public $labelVisible;

	/** @var string isRequired */
	public $isRequired;

	/** @var string dateFormat */
	public $dateFormat;

	/** @var string WhenToShow */
	public $WhenToShow;

	/** @var int EditType */
	public $EditType;

	/** @var int Type */
	public $Type;

	/** @var int presentationType */
	public $presentationType;

	/** @var int maxlength */
	public $maxlength;

	/** @var int ordernumber */
	public $ordernumber;
}
