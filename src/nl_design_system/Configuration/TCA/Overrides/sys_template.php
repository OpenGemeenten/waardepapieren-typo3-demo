<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'nl_design_system',
    'Configuration/TypoScript',
    'NL Design System'
);
