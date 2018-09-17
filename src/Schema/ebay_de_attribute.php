<?php

namespace App\Schema;

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
