<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2013 Leo Feyer
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
 * @copyright  Cliff Parnitzky 2012-2013
 * @author     Cliff Parnitzky
 * @package    BackendCustomCss
 * @license    LGPL
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssActive']           = array('Use custom CSS', 'Select if you want to use the custom CSS in the backend');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyles']   = array('Custom CSS :: Templates', 'Select which templates should be used.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssSystemStyles']     = array('Custom CSS :: System Styles', 'Select which system CSS files should be used.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssUserStyles']       = array('Custom CSS :: User styles', 'Set your own CSS file for the backend.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssUserStylesPath']   = array('Path', 'Enter the path to a CSS file.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssUserStylesActive'] = array('Active', 'Set if this CSS file is active and should be used.');

/**
 * Template styles options
 */
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['backend_full']         = array("Fill width", "Provides full width (100%) for the backend.");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['backend_improvements'] = array("Improvements", "Provides improvements for the backend css.");

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_user']['backend-extended_legend'] = 'Back end settings (extended)';

/**
 * Dynamically adding system styles for wizard.
 */
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssSystemStyleTypes']['optionLabel']['fixed'] = array("(Fix)", "<br/><br/>This CSS file ist marked as <b>Fix</b>, which means it will always be integrated in the backend, even if you have not activated using custom CSS, or deselect this CSS file.");
if ($GLOBALS['TL_CONFIG']['backendCustomCssSystemStyles'])
{
	$systemStyles = deserialize($GLOBALS['TL_CONFIG']['backendCustomCssSystemStyles']);
	if (is_array($systemStyles))
	{
		foreach ($systemStyles as $k=>$v)
		{
			if ($v['active'])
			{
				$GLOBALS['TL_LANG']['tl_user']['backendCustomCssSystemStyleTypes'][$v['alias']] = array($v['name'], $v['description'] . ($v['fix'] ? ' ' . $GLOBALS['TL_LANG']['tl_user']['backendCustomCssSystemStyleTypes']['optionLabel']['fixed'][1] : ''));
			}
		}
	}
}

?>