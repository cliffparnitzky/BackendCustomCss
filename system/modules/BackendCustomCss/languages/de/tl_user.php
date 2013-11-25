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
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssActive']           = array('Benutzerdefinierte CSS verwenden', 'Geben Sie an, ob Sie benutzerdefinierte CSS im Backend verwenden wollen.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyles']   = array('Benutzerdefinierte CSS :: Vorlagen', 'Wählen Sie aus, welche der Vorlagen verwendet werden sollen.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssSystemStyles']     = array('Benutzerdefinierte CSS :: System Styles', 'Wählen Sie aus, welche der System CSS Dateien verwendet werden sollen.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssUserStyles']       = array('Benutzerdefinierte CSS :: Benutzer Styles', 'Legen Sie eigene CSS Datei für das Backend fest.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssUserStylesPath']   = array('Pfad', 'Geben Sie den Pfad zu einer CSS Datei ein.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssUserStylesActive'] = array('Aktiv', 'Geben Sie an, ob diese CSS Datei aktiv ist und somit verwendet werden soll.');

/**
 * Template styles options
 */
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['backend_full']            = array("Volle Breite", "Stellt das Backend in voller Bildschirmbreite, also 100%, dar.<br><i>von Cliff Parnitzky</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['backend_improvements_cp'] = array("Verbesserungen (CP)", "Stellt einige Verbesserungen der Backend CSS Definition zur Verfügung.<br><i>von Cliff Parnitzky</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['backend_improvements_ng'] = array("Verbesserungen (NG)", "Stellt einige Verbesserungen der Backend CSS Definition zur Verfügung.<br><i>von Nina Gerling</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['backend_hide_paste_hint'] = array("Paste Hint verstecken", "Versteckt den Paste Hint (Hinweis mit Pfeil, wo ein neues Element einfügt werden kann)<br><i>von Cliff Parnitzky</i>");

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_user']['backend-extended_legend'] = 'Backend-Einstellungen (erweitert)';

/**
 * Dynamically adding system styles for wizard.
 */
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssSystemStyleTypes']['optionLabel']['fixed'] = array("(Fix)", "<br/><br/>Diese CSS Datei ist als <b>Fix</b> markiert, d.h. sie wird immer im Backend eingebunden, auch wenn Sie keine Verwendung benutzerdefinierter CSS aktiviert haben, oder diese CSS Datei abwählen.");
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