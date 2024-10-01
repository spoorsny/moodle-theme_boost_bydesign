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
 * Options for configuring the theme.
 *
 * @package    theme_boost_paintbynumbers
 * @copyright  2024 Geoffrey Bernardo van Wyk <geoffrey@vanwyk.biz>
 * @license    {@link https://www.gnu.org/copyleft/gpl.html} GNU GPL v3 or later
 *
 * @var theme_config $THEME
 */

defined('MOODLE_INTERNAL') || die();

$THEME->name            = 'boost_paintbynumbers';
$THEME->parents         = ['boost'];
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->scss            = 'main';
