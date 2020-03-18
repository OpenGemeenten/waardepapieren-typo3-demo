<?php
/**
 * Add waardepapieren to the types selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Waardepapieren',
        'waardepapieren_form',
        'waardepapieren'
    ]
);

/**
 * Make a copy of the textmedia content element
 */
$GLOBALS['TCA']['tt_content']['types']['waardepapieren_form'] = $GLOBALS['TCA']['tt_content']['types']['textmedia'];
