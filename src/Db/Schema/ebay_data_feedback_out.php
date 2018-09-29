<?php

namespace App\Db\Schema;

class ebay_data_feedback_out
{
	const TABLE_NAME = 'ebay_data_feedback_out';
	const kFeedbackOut = 'kFeedbackOut';
	const ItemID = 'ItemID';
	const TargetUser = 'TargetUser';
	const CommentText = 'CommentText';
	const CommentType = 'CommentType';
	const TransactionID = 'TransactionID';
	const FeedbackID = 'FeedbackID';
	const Sent = 'Sent';
	const COLUMN_NAMES = [
		'kFeedbackOut',
		'ItemID',
		'TargetUser',
		'CommentText',
		'CommentType',
		'TransactionID',
		'FeedbackID',
		'Sent',
	];
	const COLUMN_DEFINITIONS = [
		'kFeedbackOut' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ItemID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'TargetUser' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'CommentText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 80,
			'characterSetName' => 'iso_1',
		],
		'CommentType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'TransactionID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'FeedbackID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Sent' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kFeedbackOut */
	public $kFeedbackOut;

	/** @var string ItemID */
	public $ItemID;

	/** @var string TargetUser */
	public $TargetUser;

	/** @var string CommentText */
	public $CommentText;

	/** @var string CommentType */
	public $CommentType;

	/** @var string TransactionID */
	public $TransactionID;

	/** @var string FeedbackID */
	public $FeedbackID;

	/** @var string Sent */
	public $Sent;
}
