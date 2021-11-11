<?php

/**
 * @package   listviews
 * @author    Andreas Burg info@andreasburg.de
 * @license   LGPL
 * @copyright Andreas Burg info@andreasburg.de
 */

if(TL_MODE == 'BE')
{
  if(!in_array('system/modules/BackendCustomCss/assets/listviews.css', $GLOBALS['TL_CSS']))
  {
    return;
  }
  // Show page alias in page listview
  $GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'][] = 'alias';
  // Show page layout in page listview
  $GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'][] = 'includeLayout';
  $GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'][] = 'layout:tl_layout.name';
  // Show page cssClass in page listview
  $GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'][] = 'cssClass';
  // Page listview format
  $GLOBALS['TL_DCA']['tl_page']['list']['label']['format'] = '
  %s <span class="page_alias" title="alias">%s</span>
  <span class="page_layout" data-l="%.3s" title="layout">%s</span>
  <span class="page_cssClass" title="cssClass">%s</span>
  ';
}
