<?php
// This file is part of Moodle - http://moodle.org/
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
 * Settings that can be configured by the site administrator.
 *
 * @author     Geoffrey Bernardo van Wyk {@link https://geoffreyvanwyk.dev}
 * @copyright  2024 Spoorsny Tech {@link https://www.spoorsny.tech}
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @var admin_root $ADMIN
 */
defined('MOODLE_INTERNAL') || exit;

if ($ADMIN->fulltree) {
    $settings = new theme_boost_admin_settingspage_tabs(
        'themesettingboost_paintbynumbers',
        get_string('configtitle', 'theme_boost_paintbynumbers')
    );

    $page = new admin_settingpage(
        'theme_boost_paintbynumbers_general',
        get_string('generalsettings', 'theme_boost_paintbynumbers'),
    );

    $page->add(
        new admin_setting_configtextarea(
            'theme_boost_paintbynumbers/materialdesign',
            get_string('setting:materialdesign:label', 'theme_boost_paintbynumbers'),
            get_string('setting:materialdesign:description', 'theme_boost_paintbynumbers'),
            '',
            PARAM_TEXT,
        )
    );

    $settings->add($page);
}
