moodle-mod_onlineconfirm
==========================

Moodle plugin which allows users to signup without email confirmation.


Requirements
------------

This plugin requires Moodle 3.10. 

Motivation for this plugin
--------------------------

This plugin is mostly a duplicate of the Moodle core email authentication which requires users to click from a link in a received email to confirm their account.

Some users do not have the ability or can be confused by email confirmation.  With this authentication method, users click a button in the browser to confirm.

This plugin also inludes a configuration setting to enter email addresses of users who should be notified when a user registers.

Installation
------------

Install the plugin like any other plugin to folder
/auth/onlineconfirm

See http://docs.moodle.org/en/Installing_plugins for details on installing Moodle plugins

Usage & Settings
----------------

After installing the plugin, it must be enabled in Site administration -> Plugins -> Authentication -> Manage authentication.

From the page above, click Settings to configure this plugin. The setttings are similar to the Email Authentication settings with the addition of
a text field to enter email addresses separated by a comma.  Those email addresses will be sent an email when a user registers.
You can modify the email subject and message in the Onlineconfirm Authentication language string.

Plugin repositories
-------------------

The latest development version can be found on Github:
https://github.com/charbusch/moodle-auth_onlineconfirm

Bug and problem reports / Support requests
------------------------------------------

This plugin is carefully developed and thoroughly tested, but bugs and problems can always appear.

Please report bugs and problems on Github:
https://github.com/charbusch/moodle-auth_onlineconfirm/issues

I will do our best to solve your problems, but please note that due to limited resources I can't always provide per-case support.

Copyright
---------

CBusch

on behalf of

My clients
