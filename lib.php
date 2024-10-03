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
 * Global functions provided by the plugin.
 *
 * @author     Geoffrey Bernardo van Wyk {@link https://geoffreyvanwyk.dev}
 * @copyright  2024 Spoorsny Tech {@link https://www.spoorsny.tech}
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @param mixed $theme
 */

/**
 * SCSS rules that styles the theme.
 *
 * @param mixed $theme
 *
 * @return string
 */
function theme_boost_bydesign_scss($theme): string {
    global $CFG, $PAGE;

    $json = trim($theme->settings->materialdesign);

    if (empty($json)) {
        $materialdesign = file_get_contents($CFG->dirroot . '/theme/boost_bydesign/scss/_material-design-default.scss');
    } else {
        $data           = json_decode($json);
        $renderer       = new plugin_renderer_base($PAGE, RENDERER_TARGET_CLI);
        $materialdesign = $renderer->render_from_template('theme_boost_bydesign/materialdesign', $data);

        // Comment-out HTML comments in debug mode.
        $materialdesign = str_replace(['<', "'<"], '//', $materialdesign);
    }

    $main = file_get_contents($CFG->dirroot . '/theme/boost_bydesign/scss/main.scss');

    $scss = $materialdesign . $main;

    return $scss;
}
