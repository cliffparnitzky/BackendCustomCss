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
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssActive']           = array('Use custom CSS', 'Select if you want to use the custom CSS in the backend');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyles']   = array('Custom CSS :: Templates', 'Select which templates should be used.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssSystemStyles']     = array('Custom CSS :: System Styles', 'Select which system CSS files should be used.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssUserStyles']       = array('Custom CSS :: User styles', 'Set your own CSS file for the backend.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssUserStylesPath']   = array('Path', 'Enter the path to a CSS file.');
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssUserStylesActive'] = array('Active', 'Set if this CSS file is active and should be used.');

/**
 * Template styles options
 */
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['color_variation_1'] = array("Color Variation 1", "A few more pleasant main colors.<br><i>by Andreas Burg</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['filter_arrange'] = array("Filter Formatting", "Arranges the Filters with CSS Grid and enlarges the icons. Only from viewport width 1440px.<br><i>by Andreas Burg</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['filter_auto'] = array("Autofilter", "Filter react immediately when selecting: (Field type 'search' only if there is a value in the search box).<br><i>by Andreas Burg</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['pallets'] = array("Highlight Pallets", "Visualizes opened and closed pallets and makes them clickable over the entire width.<br><i>by Andreas Burg</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['toggle_all_pallets'] = array("Toggle Pallets", "Provides buttons to open or close all pallets with one click.<br><i>by Andreas Burg</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['listviews'] = array("Expand Listviews", "Shows some useful information in the page structure and the article overview. Shows the used layout, CSS class, assigned ID, alias, and more at mouseover.<br><i>by Andreas Burg</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['hide_paste_hint'] = array("Hide paste hint", "Hides the paste hint (Note with arrow, where to insert a new element)<br><i>by Cliff Parnitzky</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['no_focus_on_autocomplete'] = array("Autofocus Patch", "No autofocus for fields with <i>autocomplete</i>. See Ticket <a href=\"https://github.com/contao/contao/issues/3651\" target=\"_blank\">#3651</a>.<br><i>by Andreas Burg</i>");
$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes']['misc'] = array("Various Beta", "Miscellaneous in beta stage.<br>
- Set a min height for SVG graphics<br>
- Avoid horizontal page jumping<br>
<i>by Andreas Burg</i>");

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_user']['backend-extended_legend'] = 'Back end settings (extended)';

?>
