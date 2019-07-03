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
 * Extending paletts
 */
foreach ($GLOBALS['TL_DCA']['tl_user']['palettes'] as $key => $row)
{
  if ($key == '__selector__')
  {
    $GLOBALS['TL_DCA']['tl_user']['palettes'][$key][] = 'backendCustomCssActive';
    continue;
  }

  $arrPalettes = explode(";", $row);

  $backendPalletIndex = 0;
  $backendExtendedPalletFound = false;
  foreach ($arrPalettes as $index => $pallet)
  {
    if (strpos($pallet, "backend-extended_legend") !== false)
    {
      $arrPalettes[$index] = $pallet . ",backendCustomCssActive";
      $backendExtendedPalletFound = true;
    }
    else if (strpos($pallet, "backend_legend") !== false)
    {
      $backendPalletIndex = $index;
    }
  }
  if (!$backendExtendedPalletFound)
  {
    array_insert($arrPalettes, $backendPalletIndex + 1, '{backend-extended_legend},backendCustomCssActive', false);
  }

  $GLOBALS['TL_DCA']['tl_user']['palettes'][$key] = implode(";", $arrPalettes);
}

$GLOBALS['TL_DCA']['tl_user']['subpalettes']['backendCustomCssActive'] = 'backendCustomCssTemplateStyles,backendCustomCssSystemStyles,backendCustomCssUserStyles';

/**
 * Add field
 */
$GLOBALS['TL_DCA']['tl_user']['fields']['backendCustomCssActive'] = array
(
  'label'     => &$GLOBALS['TL_LANG']['tl_user']['backendCustomCssActive'],
  'inputType' => 'checkbox',
  'eval'      => array('tl_class'=>'w50'),
  'sql'       => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_user']['fields']['backendCustomCssTemplateStyles'] = array
(
  'label'     => &$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyles'],
  'inputType' => 'checkboxWizard',
  'options'   => array('backend_full', 'backend_improvements_cp', 'backend_improvements_ng', 'backend_hide_paste_hint'),
  'reference' => &$GLOBALS['TL_LANG']['tl_user']['backendCustomCssTemplateStyleTypes'],
  'eval'      => array('tl_class'=>'clr w50', 'multiple'=>true, 'helpwizard'=>true),
  'sql'       => "blob NULL"
);
$GLOBALS['TL_DCA']['tl_user']['fields']['backendCustomCssSystemStyles'] = array
(
  'label'            => &$GLOBALS['TL_LANG']['tl_user']['backendCustomCssSystemStyles'],
  'inputType'        => 'checkboxWizard',
  'options_callback' => array('BackendCustomCss\BackendCustomCss', 'getSystemStylesOptions'),
  'eval'             => array('tl_class'=>'w50', 'multiple'=>true),
  'sql'       => "blob NULL"
);
$GLOBALS['TL_DCA']['tl_user']['fields']['backendCustomCssUserStyles'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_user']['backendCustomCssUserStyles'],
  'inputType'               => 'multiColumnWizard',
  'eval'                    => array
  (
    'mandatory'    => false,
    'style'        => 'min-width: 100%;',
    'tl_class'     =>'clr long',
    'columnFields' => array
    (
      'cssFilePath' => array
      (
        'label'            => &$GLOBALS['TL_LANG']['tl_user']['backendCustomCssUserStylesPath'],
        'exclude'          => true,
        'inputType'        => 'text',
        'eval'             => array('style'=>'width: 95%;', 'nospace'=>true)
      ),
      'active' => array
      (
        'label'            => &$GLOBALS['TL_LANG']['tl_user']['backendCustomCssUserStylesActive'],
        'exclude'          => true,
        'inputType'        => 'checkbox'
      )
    )
  ),
  'sql'       => "blob NULL"
);

?>