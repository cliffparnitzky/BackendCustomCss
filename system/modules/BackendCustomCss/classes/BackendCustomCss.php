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
 * Class BackendCustomCss
 *
 * Adds misc functions to add css.
 * @copyright  Cliff Parnitzky 2012-2013
 * @author     Cliff Parnitzky
 */
class BackendCustomCss extends Backend
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
		$systemStyles = $this->getSystemStylesPaths();
		if ($this->User->backendCustomCssActive)
		{
			if ($this->User->backendCustomCssTemplateStyles)
			{
				foreach ($this->User->backendCustomCssTemplateStyles as $style)
				{
					$GLOBALS['TL_CSS'][] = 'system/modules/BackendCustomCss/assets/' . $style . '.css';
				}
			}
			
			if ($this->User->backendCustomCssSystemStyles)
			{
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
	public function getSystemStylesOptions(DataContainer $dc) {
		$styles = array();
		
		if ($GLOBALS['TL_CONFIG']['backendCustomCssSystemStyles'])
		{
			$systemStyles = deserialize($GLOBALS['TL_CONFIG']['backendCustomCssSystemStyles']);
			if (is_array($systemStyles))
			{
				foreach ($systemStyles as $k=>$v)
				{
					if ($v['active'])
					{
						$styles[$v['alias']] = $v['name'] . ($v['fix'] ? ' ' . $GLOBALS['TL_LANG']['tl_user']['backendCustomCssSystemStyleTypes']['optionLabel']['fixed'][0] : '');
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
					$useStyle = $v['active'];
					if ($blnOnlyFixed && $useStyle)
					{
						$useStyle = $v['fix'];
					}
					if ($useStyle)
					{
						$styles[$v['alias']] = $v['cssFilePath'];
					}
				}
			}
		}
		
		return $styles; 
	}
}

?>