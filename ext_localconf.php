<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array( //enable all actions
		'link' => 'index, new, create, edit, update, delete, populate',
	),
	array( //non-cached-actions
		'link' => 'new, edit, populate',
	)
);

?>