[![Latest Version on Packagist](http://img.shields.io/packagist/v/cliffparnitzky/backend-custom-css.svg?style=flat)](https://packagist.org/packages/cliffparnitzky/backend-custom-css)
[![Installations via composer per month](http://img.shields.io/packagist/dm/cliffparnitzky/backend-custom-css.svg?style=flat)](https://packagist.org/packages/cliffparnitzky/backend-custom-css)
[![Installations via composer total](http://img.shields.io/packagist/dt/cliffparnitzky/backend-custom-css.svg?style=flat)](https://packagist.org/packages/cliffparnitzky/backend-custom-css)

Contao Extension: BackendCustomCss
==================================

Provides the possibility to add special css to the contao backend.

There are 3 types of custom css:
- templates ... delivered by this extension (send me yours, if you want to put it in this collection)
- system styles ... added by system admin to settings (could be marked `fix` - will always be used and are not selectable by user, could be restricted by domain)
- user styles ... each user could set its own styles in user settings

The system styles (defined by admin) will automatically be listed in user settings (if active, not fixed and match the domain). Each style could be set inactive (will not be loaded).

Each user style can also be set to inactive (must not be deleted in order to avoid loading).


Installation
------------

Install the extension via composer: [cliffparnitzky/backend-custom-css](https://packagist.org/packages/cliffparnitzky/backend-custom-css).

If you prefer to install it manually, download the latest release here: https://github.com/cliffparnitzky/BackendCustomCss/releases


Tracker
-------

https://github.com/cliffparnitzky/BackendCustomCss/issues


Compatibility
-------------

- Contao version >= 3.2.0 ... <  3.6.0
- Contao version >= 4.4.0


Dependency
----------

This extension is dependent on the following extensions:

- [[menatwork/contao-multicolumnwizard]](https://packagist.org/packages/menatwork/contao-multicolumnwizard),


Screenshots
-----------

![Screenshot: System settings](https://raw.github.com/cliffparnitzky/BackendCustomCss/master/screenshot_settings.jpg)

![Screenshot: User settings](https://raw.github.com/cliffparnitzky/BackendCustomCss/master/screenshot_user.jpg)

![Screenshot: Wizard for templates](https://raw.github.com/cliffparnitzky/BackendCustomCss/master/screenshot_user_wizard_templates.jpg)

![Screenshot: Wizard for system styles](https://raw.github.com/cliffparnitzky/BackendCustomCss/master/screenshot_user_wizard_system_styles.jpg)