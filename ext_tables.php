<?php
if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}

//add the TypoScript configuration.
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('list_unsubscribe_header', 'Configuration/TypoScript', 'List-Unsubscribe Header');