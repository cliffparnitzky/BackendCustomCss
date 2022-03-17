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
 * Add to palette
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{backendCustomCss_legend},backendCustomCssSystemStyles;';

/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['backendCustomCssSystemStyles'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['backendCustomCssSystemStyles'],
  'inputType'               => 'multiColumnWizard',
  'eval'                    => array
  (
    'style'        => 'min-width: 100%;',
    'tl_class'     =>'clr',
    'columnFields' => array
    (
      'alias' => array
      (
        'label'            => &$GLOBALS['TL_LANG']['tl_settings']['backendCustomCssSystemStylesAlias'],
        'exclude'          => true,
        'inputType'        => 'text',
        'eval'             => array('style'=>'width: 95%;', 'spaceToUnderscore'=>true, 'rgxp'=>'alias')
      ),
      'name' => array
      (
        'label'            => &$GLOBALS['TL_LANG']['tl_settings']['backendCustomCssSystemStylesName'],
        'exclude'          => true,
        'inputType'        => 'text',
        'eval'             => array('style'=>'width: 95%;')
      ),
      'cssFilePath' => array
      (
        'label'            => &$GLOBALS['TL_LANG']['tl_settings']['backendCustomCssSystemStylesPath'],
        'exclude'          => true,
        'inputType'        => 'text',
        'eval'             => array('style'=>'width: 95%;', 'nospace'=>true)
      ),
      'domain' => array
      (
        'label'            => &$GLOBALS['TL_LANG']['tl_settings']['backendCustomCssSystemStylesDomain'],
        'exclude'          => true,
        'inputType'        => 'text',
        'eval'             => array('style'=>'width: 95%;')
      ),
      'fix' => array
      (
        'label'            => &$GLOBALS['TL_LANG']['tl_settings']['backendCustomCssSystemStylesFix'],
        'exclude'          => true,
        'inputType'        => 'checkbox'
      ),
      'active' => array
      (
        'label'            => &$GLOBALS['TL_LANG']['tl_settings']['backendCustomCssSystemStylesActive'],
        'exclude'          => true,
        'inputType'        => 'checkbox'
      )
    )
  )
); 

?>