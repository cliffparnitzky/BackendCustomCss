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

namespace CliffParnitzky\BackendCustomCss;

/**
 * Class BackendCustomCss
 *
 * Adds misc functions to add CSS.
 * @copyright  Cliff Parnitzky 2012-2019
 * @author     Cliff Parnitzky
 */
class BackendCustomCss extends \Backend
{
  /**
   * Initialize the object, import the user class file
   */
  public function __construct()
  {
    parent::__construct();
    $this->import('BackendUser', 'User');
  }

  /**
   * Adds css
   */
  public function addStaticConfiguration($strName, $strLanguage)
  {
    if ($this->User->backendCustomCssActive)
    {
      if ($this->User->backendCustomCssTemplateStyles)
      {
        $stylePath = 'system/modules/BackendCustomCss/assets/';
        foreach ($this->User->backendCustomCssTemplateStyles as $style)
        {
          if (is_file($stylePath . $style . '.css'))
          {
            $GLOBALS['TL_CSS'][] = $stylePath . $style . '.css';
          }
          if (is_file($stylePath . $style . '.js'))
          {
            $GLOBALS['TL_JAVASCRIPT'][] = $stylePath . $style . '.js';
          }
        }
      }

      if ($this->User->backendCustomCssSystemStyles)
      {
        $systemStyles = $this->getSystemStylesPaths();
        foreach ($this->User->backendCustomCssSystemStyles as $style)
        {
          $path = $systemStyles[$style];
          if (strlen($path) > 4 && substr($path, strlen($path) - 4, strlen($path)) == ".css")
          {
            $GLOBALS['TL_CSS'][$style] = $path;
          }
        }
      }

      if ($this->User->backendCustomCssUserStyles)
      {
        foreach ($this->User->backendCustomCssUserStyles as $style)
        {
          $path = $style['cssFilePath'];
          if ($style['active'] && strlen($path) > 4 && substr($path, strlen($path) - 4, strlen($path)) == ".css")
          {
            $GLOBALS['TL_CSS'][] = $path;
          }
        }
      }
    }

    // add fixed system css
    $systemStyles = $this->getSystemStylesPaths(true);
    foreach ($systemStyles as $alias=>$path)
    {
      if (strlen($GLOBALS['TL_CSS'][$alias]) == 0 && strlen($path) > 4 && substr($path, strlen($path) - 4, strlen($path)) == ".css")
      {
        $GLOBALS['TL_CSS'][] = $path;
      }
    }

    // make sure the hook is only executed once
    unset($GLOBALS['TL_HOOKS']['loadLanguageFile']['BackendCustomCssHook']);
  }

  /**
   * Return all system styles definied in system settings as array to create checkbox options
   * @param DataContainer
   * @return array
   */
  public function getSystemStylesOptions(\DataContainer $dc) {
    $styles = array();

    if ($GLOBALS['TL_CONFIG']['backendCustomCssSystemStyles'])
    {
      $systemStyles = deserialize($GLOBALS['TL_CONFIG']['backendCustomCssSystemStyles']);
      if (is_array($systemStyles))
      {
        foreach ($systemStyles as $k=>$v)
        {
          if ($v['active'] && !$v['fix'] && static::matchesDomain($v['domain']))
          {
            $styles[$v['alias']] = $v['name'];
          }
        }
      }
    }

    return $styles;
  }

  /**
   * Return all active system styles definied in system settings as array with path
   * @return array
   */
  private function getSystemStylesPaths($blnOnlyFixed = false) {
    $styles = array();

    if ($GLOBALS['TL_CONFIG']['backendCustomCssSystemStyles'])
    {
      $systemStyles = deserialize($GLOBALS['TL_CONFIG']['backendCustomCssSystemStyles']);
      if (is_array($systemStyles))
      {
        foreach ($systemStyles as $k=>$v)
        {
          $useStyle = $v['active'] && static::matchesDomain($v['domain']);

          if ($useStyle)
          {
            if ($blnOnlyFixed && $v['fix'])
            {
              $useStyle = true;
            }
            else if (!$blnOnlyFixed && !$v['fix'])
            {
              $useStyle = true;
            }
            else
            {
              $useStyle = false;
            }

            if ($useStyle)
            {
              $styles[$v['alias']] = $v['cssFilePath'];
            }
          }
        }
      }
    }

    return $styles;
  }

  /**
   * Check if the given domain is contained in the environment HTTP host
   */
  public static function matchesDomain($strDomain)
  {
    if (empty($strDomain))
    {
      return true;
    }

    return strpos(\Environment::get('httpHost'), $strDomain) !== FALSE;
  }
}

?>