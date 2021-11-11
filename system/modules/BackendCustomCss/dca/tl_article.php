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
  // Show article cssID in article listview
  $GLOBALS['TL_DCA']['tl_article']['list']['label']['fields'][] = 'cssID';
  // Show article alias in article listview
  $GLOBALS['TL_DCA']['tl_article']['list']['label']['fields'][] = 'alias';
  // Article listview format
  $GLOBALS['TL_DCA']['tl_article']['list']['label']['format'] = '
  <span class="article_format">
  <span class="article_title" title="%1$s">%4$s</span>
  <span class="article_section" title="Show in">%2$s</span>
  <span class="article_cssId">%3$s</span>
  </span>
  ';
}
