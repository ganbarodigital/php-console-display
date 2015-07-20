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

use GanbaroDigital\ConsoleDisplay\Exceptions\E4xx_UnsupportedType;
use GanbaroDigital\ConsoleDisplay\Checks\IsTty;
use GanbaroDigital\Reflection\ValueBuilders\SimpleType;

class DetermineTerminalWidthUsingEnvironment
{
    /**
     * how wide is our terminal? can the environment provide the answer?
     *
     * @param  resource $fp
     *         the terminal we are connected to
     * @return int|null
     *         null if we are not connected to a real terminal
     *         null if the environment has no useful hints
     *         the terminal width otherwise
     */
    public static function fromFileHandle($fp)
    {
        // no point if we are not connected to a real terminal
        if (!IsTty::checkFileHandle($fp)) {
            return null;
        }

        return self::getScreenWidthFromEnvironment();
    }

    /**
     * ask ncurses how wide the screen is
     *
     * @return int|null
     */
    private static function getScreenWidthFromEnvironment()
    {
        $hint = getenv('COLUMNS');
        if (is_numeric($hint)) {
            return (int)$hint;
        }

        return null;
    }

    /**
     * how wide is our terminal? can the environment provide the answer?
     *
     * @param  resource $fp
     *         the terminal we are connected to
     * @return int|null
     *         null if we are not connected to a real terminal
     *         null if the environment has no useful hints
     *         the terminal width otherwise
     */
    public function __invoke($fp)
    {
        return self::fromFileHandle($fp);
    }
}