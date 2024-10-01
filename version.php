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
 * Metadata of the plugin used during installation and upgrades.
 *
 * @package    theme_boost_paintbynumbers
 * @author     Geoffrey Bernardo van Wyk {@link https://geoffreyvanwyk.dev}
 * @copyright  2024 Spoorsny Tech {@link https://www.spoorsny.tech}
 * @license    {@link https://www.gnu.org/copyleft/gpl.html} GNU GPL v3 or later
 */

/** @noinspection PhpDynamicFieldDeclarationInspection */

use core\plugininfo\theme;

defined('MOODLE_INTERNAL') || die();

if (! class_exists('theme_boost_paintbynumbers')) {
    /**
     * @property string component the component name, type_name
     */
    class theme_boost_paintbynumbers extends theme
    {
    }
}

/** @var theme_boost_paintbynumbers $plugin */
$plugin->component = 'theme_boost_paintbynumbers';
$plugin->version   = 2024092700;
$plugin->requires  = 2024042200; // Moodle 4.4

$plugin->dependencies = [
    'theme_boost' => 2024042200,
];
