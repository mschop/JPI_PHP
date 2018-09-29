<?php

namespace App\Db\Schema;

class ebay_data_feedback_in
{
	const TABLE_NAME = 'ebay_data_feedback_in';
	const kFeedbackIn = 'kFeedbackIn';
	const ItemID = 'ItemID';
	const CommentingUser = 'CommentingUser';
	const CommentingUserScore = 'CommentingUserScore';
	const CommentText = 'CommentText';
	const CommentTime = 'CommentTime';
	const CommentType = 'CommentType';
	const FeedbackID = 'FeedbackID';
	const FeedbackRole = 'FeedbackRole';
	const TransactionID = 'TransactionID';
	const COLUMN_NAMES = [
		'kFeedbackIn',
		'ItemID',
		'CommentingUser',
		'CommentingUserScore',
		'CommentText',
		'CommentTime',
		'CommentType',
		'FeedbackID',
		'FeedbackRole',
		'TransactionID',
	];
	const COLUMN_DEFINITIONS = [
		'kFeedbackIn' => [
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
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'CommentingUser' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'CommentingUserScore' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'CommentText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 80,
			'characterSetName' => 'iso_1',
		],
		'CommentTime' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
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
		'FeedbackID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'FeedbackRole' => [
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
	];

	/** @var int kFeedbackIn */
	public $kFeedbackIn;

	/** @var string ItemID */
	public $ItemID;

	/** @var string CommentingUser */
	public $CommentingUser;

	/** @var int CommentingUserScore */
	public $CommentingUserScore;

	/** @var string CommentText */
	public $CommentText;

	/** @var string CommentTime */
	public $CommentTime;

	/** @var string CommentType */
	public $CommentType;

	/** @var string FeedbackID */
	public $FeedbackID;

	/** @var string FeedbackRole */
	public $FeedbackRole;

	/** @var string TransactionID */
	public $TransactionID;
}
