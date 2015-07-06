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
 * @package   ConsoleDisplay/ColourCharts
 * @author    Stuart Herbert <stuherbert@ganbarodigital.com>
 * @copyright 2010 Gradwell dot com Ltd www.gradwell.com
 * @copyright 2011 Stuart Herbert www.stuartherbert.com
 * @copyright 2015-present Ganbaro Digital Ltd www.ganbarodigital.com
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link      http://code.ganbarodigital.com/php-console-display
 */

namespace GanbaroDigital\ConsoleDisplay\ColourCharts;

class ClassicColourChart
{
    const GRAY_FG = 30;
    const BLACK_FG = 30;
    const RED_FG = 31;
    const GREEN_FG = 32;
    const YELLOW_FG = 33;
    const BLUE_FG = 34;
    const MAGENTA_FG = 35;
    const CYAN_FG = 36;
    const WHITE_FG = 37;

    const GRAY_BG = 40;
    const BLACK_BG = 40;
    const RED_BG = 41;
    const GREEN_BG = 42;
    const YELLOW_BG = 43;
    const BLUE_BG = 44;
    const MAGENTA_BG = 45;
    const CYAN_BG = 46;
    const WHITE_BG = 47;

    const NONE = 0;
    const BOLD = 1;
    const FAINT = 2;
    const ITALIC = 3;
    const UNDERLINED = 4;
    const DOUBLE_UNDERLINED = 21;
    const NORMAL = 22;

    /**
     * Basic escape sequence string. Use sprintf() to insert escape codes.
     *
     * @var string
     */
    const ESCAPE_SEQUENCE = "\033[%sm";
}