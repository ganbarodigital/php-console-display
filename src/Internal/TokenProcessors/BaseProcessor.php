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
 * @package   ConsoleDisplay/Internal
 * @author    Stuart Herbert <stuherbert@ganbarodigital.com>
 * @copyright 2010 Gradwell dot com Ltd www.gradwell.com
 * @copyright 2011 Stuart Herbert www.stuartherbert.com
 * @copyright 2015-present Ganbaro Digital Ltd www.ganbarodigital.com
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link      http://code.ganbarodigital.com/php-console-display
 */

namespace GanbaroDigital\ConsoleDisplay\Internal\TokenProcessors;

use GanbaroDigital\ConsoleDisplay\Exceptions\E4xx_UnsupportedType;
use GanbaroDigital\ConsoleDisplay\Internal\OutputWriters\OutputWriter;
use GanbaroDigital\ConsoleDisplay\Internal\TokenTypes;

class BaseProcessor
{
    /**
     * how far should every line indent?
     *
     * @var integer
     */
    private $indentTo = 0;

    /**
     * how far along the line are we?
     *
     * @var integer
     */
    private $linePos = 0;

    /**
     * how should we handle each token type?
     *
     * @var array
     */
    protected $tokenHandlers = [
        TokenTypes\AdjustIndentToken::class => 'handleAdjustIndentToken',
        TokenTypes\SetIndentToken::class => 'handleSetIndentToken',
        TokenTypes\EolToken::class    => 'handleEolToken',
    ];

    public function writePartialLine(OutputWriter $stream, $theme, $tokens)
    {
        foreach($tokens as $token)
        {
            $handler = $this->getTokenHandler($token);
            call_user_func_array([$this, $handler], [$stream, $theme, $token]);
        }
    }

    public function writeFullLine(OutputWriter $stream, $theme, $tokens)
    {
        $this->writePartialLine($stream, $theme, $tokens);
        if ($this->linePos !== 0) {
            $this->writeNewline($stream);
        }
    }

    public function writeNewline(OutputWriter $stream)
    {
        $stream->writeNewline();
        $this->linePos = 0;
    }

    protected function getTokenHandler($token)
    {
        $className = get_class($token);
        if (isset($this->tokenHandlers[$className])) {
            return $this->tokenHandlers[$className];
        }

        // we have a fallback handler for when there's no special
        // case to handle
        return 'handleGenericToken';
    }

    protected function handleGenericToken($stream, $theme, $token)
    {
        // do we need to indent?
        $this->writeIndentIfNeeded($stream);

        // general case
        $output = (string)$token;
        $stream->writeContent($output);
        $this->linePos += strlen($output);
    }

    protected function handleEolToken($stream, $theme, $token)
    {
        $stream->writeNewline();
        $this->linePos = 0;
    }

    protected function handleAdjustIndentToken($stream, $theme, $token)
    {
        $this->indentTo += $token->getIndent();
        if ($this->indentTo < 0) {
            $this->indentTo = 0;
        }
    }

    protected function handleSetIndentToken($stream, $theme, $token)
    {
        $this->indentTo = $token->getIndent();
        if ($this->indentTo < 0) {
            $this->indentTo = 0;
        }
    }

    protected function writeIndentIfNeeded($stream)
    {
        if ($this->linePos >= $this->indentTo) {
            return;
        }

        $stream->writeContent(str_repeat(' ', $this->indentTo - $this->linePos));
    }
}