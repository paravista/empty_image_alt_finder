<?php
defined('TYPO3') or die();

call_user_func(function () {

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'empty_image_alt_finder',
        'Configuration/TypoScript',
        'Empty Image Alt Finder'
    );

});
