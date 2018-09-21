<?php

namespace App\Schema;

class pf_amazon_log_zuordnen
{
	const TABLE_NAME = 'pf_amazon_log_zuordnen';
	const dErstellt = 'dErstellt';
	const cNachricht = 'cNachricht';
	const COLUMN_NAMES = ['dErstellt', 'cNachricht'];
	const COLUMN_TYPES = ['dErstellt' => 'datetime', 'cNachricht' => 'varchar'];

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cNachricht */
	public $cNachricht;
}
