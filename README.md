Contao Extension: BackendCustomCss
==================================

Provides the possibility to add special css to the contao backend.

There are 3 types of custom css:
- templates ... delivered by this extension
- system styles ... added by system admin to settings (could be marked `fix` ... will always be used, even if usage custom css is not activated by user)
- user styles ... each user could set its own styles in user settings

The system styles (defined by admin) will automatically be displayed in a wizard. Each style could be set inactive (will not be loaded).

Each user style can also be set to inactive (must not be deleted in order to avoid loading).

Installation
------------

The extension is not published in contao extension repository.
Install it manually.


Tracker
-------

https://github.com/cliffparnitzky/BackendCustomCss/issues


Compatibility
-------------

- min. version: Contao 2.9.5
- max. version: Contao 3.0.x


Dependency
----------

- There are no dependencies to other extensions, that have to be installed.


Screenshots
-----------

![Screenshot: System settings](https://raw.github.com/cliffparnitzky/BackendCustomCss/master/screenshot_settings.jpg)

![Screenshot: User settings](https://raw.github.com/cliffparnitzky/BackendCustomCss/master/screenshot_user.jpg)

![Screenshot: Wizard for templates](https://raw.github.com/cliffparnitzky/BackendCustomCss/master/screenshot_user_wizard_templates.jpg)

![Screenshot: Wizard for system styles](https://raw.github.com/cliffparnitzky/BackendCustomCss/master/screenshot_user_wizard_system_styles.jpg)