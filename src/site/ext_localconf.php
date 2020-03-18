<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

(function () {
    /**
     * BACKEND
     */

    /**
     * Page TsConfig
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
        <INCLUDE_TYPOSCRIPT:source="DIR:EXT:site/Configuration/TsConfig/Page/Autoload" extensions="tsconfig">
    ');
})();
