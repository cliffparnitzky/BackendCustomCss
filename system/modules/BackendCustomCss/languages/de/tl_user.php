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
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssActive']           = array('Benutzerdefinierte CSS verwenden', 'Geben Sie an, ob Sie benutzerdefinierte CSS im Backend verwenden wollen.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyles']   = array('Benutzerdefinierte CSS :: Vorlagen', 'Wählen Sie aus, welche der Vorlagen verwendet werden sollen.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssSystemStyles']     = array('Benutzerdefinierte CSS :: System Styles', 'Wählen Sie aus, welche der System CSS Dateien verwendet werden sollen.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssUserStyles']       = array('Benutzerdefinierte CSS :: Benutzer Styles', 'Legen Sie eigene CSS Datei für das Backend fest.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssUserStylesPath']   = array('Pfad', 'Geben Sie den Pfad zu einer CSS Datei ein.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssUserStylesActive'] = array('Aktiv', 'Geben Sie an, ob diese CSS Datei aktiv ist und somit verwendet werden soll.');

/**
 * Template styles options
 */
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['color_variation_1'] = array("Farbvariation 1", "Ein paar wenige angenehmere Hauptfarben.<br><i>von Andreas Burg</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['filter_arrange'] = array("Filter formatieren", "Arrangiert die Filter mit CSS Grid und vergrößert die Icons. Nur ab Viewportbreite 1440px.<br><i>von Andreas Burg</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['filter_auto'] = array("Autofilter", "Filter reagieren sofort bei Auswahl: (Feldtyp für die Suche nur, wenn ein Wert im Suchfeld vorhanden ist).<br><i>von Andreas Burg</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['pallets'] = array("Paletten hervorheben", "Visualisiert geöffnete und geschlossene Paletten und macht sie über die gesamte Breite anklickbar.<br><i>von Andreas Burg</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['toggle_all_pallets'] = array("Paletten auf-/zuklappen", "Stellt Button zur Verfügung um alle Paletten gleichzeitig zu öffnen oder zu schließen.<br><i>von Andreas Burg</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['listviews'] = array("Listviews erweitern", "Zeigt einige nützliche Informationen in der Seitenstruktur und der Artikelübersicht. Zeigt das benutzte Layout, CSS-Klassen, vergebene ID, Alias und mehr bei Mouseover.<br><i>von Andreas Burg</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['hide_paste_hint'] = array("Paste Hint verstecken", "Versteckt den Paste Hint (Hinweis mit Pfeil, wo ein neues Element einfügt werden kann).<br><i>von Cliff Parnitzky</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['no_focus_on_autocomplete'] = array("Autofocus Patch", "Kein Autofocus für Felder mit <i>autocomplete</i>. Siehe Ticket <a href=\"https://github.com/contao/contao/issues/3651\" target=\"_blank\">#3651</a>.<br><i>von Andreas Burg</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['misc'] = array("Diverse Beta", "Diverses im Beta-Stadium.<br>
- Eine Mindesthöhe für SVG-Grafiken setzen<br>
- Horizontales Springen der Seite verhindern<br>
<i>von Andreas Burg</i>");

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_user']['backend-extended_legend'] = 'Backend-Einstellungen (erweitert)';

?>
