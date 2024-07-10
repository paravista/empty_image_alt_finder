<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

$lll = 'LLL:EXT:empty_image_alt_finder/Resources/Private/Language/locallang.xlf:';

$GLOBALS['TYPO3_USER_SETTINGS']['columns']['emptyImageAltFinderFeDebug'] = [
    'label' => $lll . 'tx_empty_image_alt_finder_fe_debug',
    'type' => 'check',
    'renderType' => 'checkboxToggle'
];
ExtensionManagementUtility::addFieldsToUserSettings(
    'emptyImageAltFinderFeDebug',
    'after:showHiddenFilesAndFolders',
);
