<?php
// This file is part of the FAQ plugin for Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language strings for local FAQ
 *
 * @package    local_faq
 * @copyright  CBusch
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['auth_onlineconfirmdescription'] = 'Requires email address but no email confirmation.';
$string['auth_onlineconfirmsettings'] = 'Settings';
$string['pluginname'] = 'Online Confirm';
$string['auth_onlineconfirm_emailnew'] = 'Email New User';
$string['auth_onlineconfirm_emailnew_description'] = 'Enter the email addresses here, separated by a comma, of those who should be sent an email when users register.';
$string['email_new_subject'] = '{$a->student} registered at safe environment training site';
$string['email_new_message'] = '<p>{$a->student} created a new account.</p>';
$string['onlineconfirm'] = '<p>Please click on the button below to confirm your new account.</p>
   <p>If you need help, please contact the site administrator.</p>';
$string['privacy:metadata'] = 'The Onlineconfirm authentication plugin does not store any personal data.';
