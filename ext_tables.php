<?php

/*
 * This file is part of the package ucph_sys_saveclose.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['Backend\Template\Components\ButtonBar']['getButtonsHook']['MyExt'] = \UniversityOfCopenhagen\UcphSysSaveClose\Hooks\SaveCloseHook::class . '->addSaveCloseButton';