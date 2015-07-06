<?php

/**
 * Copyright (c) 2010, Gradwell dot com Ltd
 * Copyright (c) 2011, Stuart Herbert
 * Copyright (c) 2015-present Ganbaro Digital Ltd
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the names of the copyright holders nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category  Libraries
 * @package   ConsoleDisplay/ValueBuilders
 * @author    Stuart Herbert <stuherbert@ganbarodigital.com>
 * @copyright 2010 Gradwell dot com Ltd www.gradwell.com
 * @copyright 2011 Stuart Herbert www.stuartherbert.com
 * @copyright 2015-present Ganbaro Digital Ltd www.ganbarodigital.com
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link      http://code.ganbarodigital.com/php-console-display
 */

namespace GanbaroDigital\ConsoleDisplay\ValueBuilders;

use GanbaroDigital\ConsoleDisplay\ColourCharts\ClassicColourChart as Classic;
use GanbaroDigital\ConsoleDisplay\ColourCharts\TwoFiveSixColourChart as HiDef;
use GanbaroDigital\ConsoleDisplay\Exceptions\E4xx_UnsupportedType;
use GanbaroDigital\ConsoleDisplay\Themes\InMemoryTheme;
use GanbaroDigital\ConsoleDisplay\Themes\Theme;
use GanbaroDigital\Reflection\ValueBuilders\FirstMethodMatchingType;

class BuildTheme
{
    /**
     * convert input into a theme for use in output
     *
     * @param  mixed $input
     *         the input to build the theme from
     * @return Theme
     *         the built theme
     */
    public function __invoke($input)
    {
        $methodName = FirstMethodMatchingType::fromMixed($input, get_class($this), 'from');
        return self::$methodName($input);
    }

    /**
     * convert input into a theme for use in output
     *
     * @param  array $input
     *         the input to build the theme from
     * @return Theme
     *         the built theme
     */
    public static function fromArray($input)
    {
        // make sure the reset sequence is part of the theme def
        $themeDef = array_merge($input, self::defineResetFormatting());

        // create our theme
        $retval = new InMemoryTheme($themeDef);
        return $retval;
    }

    private static function defineResetFormatting()
    {
        return [
            '<none>' => [
                Theme::CLASSIC => [
                    Classic::NONE,
                ],
                Theme::HIDEF => [
                    Classic::NONE,
                ]
            ]
        ];
    }
}