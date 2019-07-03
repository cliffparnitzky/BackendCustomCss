<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2019 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
  'CliffParnitzky',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
  // Classes
  'CliffParnitzky\BackendCustomCss\BackendCustomCss' => 'system/modules/BackendCustomCss/classes/BackendCustomCss.php',
));
