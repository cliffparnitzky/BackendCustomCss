<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2019 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2012-2019
 * @author     Cliff Parnitzky
 * @package    BackendCustomCss
 * @license    LGPL
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_settings']['backendCustomCssSystemStyles']       = array('Custom CSS :: System Styles', 'Set custom system CSS files to be used in backend.These can be selected by each user.<br/><br/>If the <b>Fix</b> option is marked, the corresponding CSS file will always be be integrated in the backend, even if you have not activated using custom CSS.');
$GLOBALS['TL_LANG']['tl_settings']['backendCustomCssSystemStylesAlias']  = array('Alias', 'Enter an alias for this CSS file. It must be unique.');
$GLOBALS['TL_LANG']['tl_settings']['backendCustomCssSystemStylesName']   = array('Name', 'Enter a name for this CSS file.');
$GLOBALS['TL_LANG']['tl_settings']['backendCustomCssSystemStylesPath']   = array('Path', 'Enter the path to a CSS file.');
$GLOBALS['TL_LANG']['tl_settings']['backendCustomCssSystemStylesDomain'] = array('Domain', 'Enter a domain for which this CSS file is exclusively valid. The entered text must be contained in the system domain (e.g. <i>domain.tld</i> is contained in <i>www.my-domain.tld</i>). If there are several valid domains, enter several entries.');
$GLOBALS['TL_LANG']['tl_settings']['backendCustomCssSystemStylesFix']    = array('Fix', 'Legen Sie feste, ob diese CSS Datei immer verwendet werden soll.');
$GLOBALS['TL_LANG']['tl_settings']['backendCustomCssSystemStylesActive'] = array('Active', 'Set if this CSS file is active and should be used.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_settings']['backendCustomCss_legend'] = 'Custom CSS';

?>