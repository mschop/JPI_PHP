<?php

namespace App\Schema;

class tStatistikBenutzerordner
{
	const TABLE_NAME = 'tStatistikBenutzerordner';
	const kStatistikBenutzerordner = 'kStatistikBenutzerordner';
	const kStatistikBenutzerordnerVater = 'kStatistikBenutzerordnerVater';
	const kBenutzer = 'kBenutzer';
	const cName = 'cName';

	/** @var int kStatistikBenutzerordner */
	public $kStatistikBenutzerordner;

	/** @var int kStatistikBenutzerordnerVater */
	public $kStatistikBenutzerordnerVater;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cName */
	public $cName;
}
