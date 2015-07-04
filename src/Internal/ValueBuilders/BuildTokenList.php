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
 * @package   Reflection/ValueBuilders
 * @author    Stuart Herbert <stuherbert@ganbarodigital.com>
 * @copyright 2010 Gradwell dot com Ltd www.gradwell.com
 * @copyright 2011 Stuart Herbert www.stuartherbert.com
 * @copyright 2015-present Ganbaro Digital Ltd www.ganbarodigital.com
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link      http://code.ganbarodigital.com/php-console-display
 */

namespace GanbaroDigital\ConsoleDisplay\Internal\ValueBuilders;

use GanbaroDigital\ConsoleDisplay\Exceptions\E4xx_UnsupportedType;
use GanbaroDigital\ConsoleDisplay\Internal\Tokens;
use GanbaroDigital\Reflection\ValueBuilders\FirstMethodMatchingType;

class BuildTokenList
{
    const REGEX_TAG="[A-Za-z0-9_-]+";

    public function __invoke($input)
    {
        $methodName = FirstMethodMatchingType::fromMixed($input, get_class($this), 'from');
        return self::$methodName($input);
    }

    public static function fromString($input)
    {
        $skipFinalEol = !self::endsWithEol($input);
        return self::tokenizeString($input, $skipFinalEol);
    }

    private static function tokenizeString($input, $skipFinalEol)
    {
        $retval = [];

        $lines = explode(PHP_EOL, $input);
        foreach ($lines as $currentLine) {
            // skip empty lines
            if (empty($currentLine)) {
                continue;
            }

            $retval = array_merge($retval, self::tokenizeLine($currentLine));
        }

        // do we want to lose the last EOL token?
        if ($skipFinalEol) {
            unset($retval[count($retval) - 1]);
        }

        // all done
        return $retval;
    }

    private static function endsWithEol($input)
    {
        return substr($input, 0 - strlen(PHP_EOL)) === PHP_EOL;
    }

    private static function tokenizeLine($currentLine)
    {
        $matches = self::locateFormattingTokens($currentLine);
        $currentLinePos=0;
        $retval=[];

        foreach ($matches[0] as $match) {
            if ($strToken = self::buildStringTokenFromMatch($match, $currentLine, $currentLinePos)) {
                $retval[] = $strToken;
                $currentLinePos = $currentLinePos + $strToken->getLength();
            }

            // now the token
            $retval[] = self::buildFormattingTokenFromMatch($match);
            $currentLinePos = $currentLinePos + strlen($match[0]);
        }

        // at this point, we might have some more string to go
        $retval = array_merge($retval, self::appendTrailingString($currentLine, $currentLinePos));

        // we need an end-of-line token
        $retval[] = new Tokens\EolToken();

        // all done
        return $retval;
    }

    private static function locateFormattingTokens($currentLine)
    {
        static $regex = null;
        if (!$regex) {
            $regex = "#<(" . self::REGEX_TAG . "|/" . self::REGEX_TAG . ")>#";
        }
        preg_match_all($regex, $currentLine, $matches, PREG_OFFSET_CAPTURE);

        return $matches;
    }

    private static function buildStringTokenFromMatch($match, $currentLine, $currentLinePos)
    {
        if ($match[1] <= $currentLinePos) {
            return null;
        }

        // we have a string at first
        return new Tokens\StringToken(substr($currentLine, $currentLinePos, $match[1] - $currentLinePos));
    }

    private static function buildFormattingTokenFromMatch($match)
    {
        if ($match[0][1] == '/') {
            return new Tokens\FormattingToken("<none>");
        }

        return new Tokens\FormattingToken($match[0]);
    }

    private static function appendTrailingString($currentLine, $currentLinePos)
    {
        // at this point, we might have some more string to go
        if ($currentLinePos < strlen($currentLine)) {
            return [ new Tokens\StringToken(substr($currentLine, $currentLinePos)) ];
        }

        return [];
    }
}