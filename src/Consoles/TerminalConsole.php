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
 * @package   ConsoleDisplay/Consoles
 * @author    Stuart Herbert <stuherbert@ganbarodigital.com>
 * @copyright 2010 Gradwell dot com Ltd www.gradwell.com
 * @copyright 2011 Stuart Herbert www.stuartherbert.com
 * @copyright 2015-present Ganbaro Digital Ltd www.ganbarodigital.com
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link      http://code.ganbarodigital.com/php-console-display
 */

namespace GanbaroDigital\ConsoleDisplay\Consoles;

use GanbaroDigital\ConsoleDisplay\Internal\StreamComponents\ConsoleStreamHead;
use GanbaroDigital\ConsoleDisplay\Internal\StreamComponents\ConsoleStreamState;
use GanbaroDigital\ConsoleDisplay\Internal\TokenProcessors\IndentProcessor;
use GanbaroDigital\ConsoleDisplay\Internal\TokenProcessors\ThemeProcessor;
use GanbaroDigital\ConsoleDisplay\Internal\TokenProcessors\WordWrapProcessor;
use GanbaroDigital\ConsoleDisplay\Internal\Tokenisers\FormattingTokeniser;
use GanbaroDigital\ConsoleDisplay\OutputWriters\StdoutWriter;
use GanbaroDigital\ConsoleDisplay\OutputWriters\StderrWriter;
use GanbaroDigital\ConsoleDisplay\Themes\Theme;
use GanbaroDigital\ConsoleDisplay\ValueBuilders\DetermineWordWrapColumn;

class TerminalConsole implements Console
{
    private $streamState;
    private $stdoutStream;
    private $stderrStream;

    /**
     * create a console that writes to the user's current Terminal
     *
     * @param Theme $theme
     *        the theme to use for formatting support
     */
    public function __construct(Theme $theme = null)
    {
        // this will keep track of the state of our stream
        $this->streamState = new ConsoleStreamState($theme);
        $this->streamState->wrapAt = DetermineWordWrapColumn::fromFileHandle(STDIN);

        // we create one stream for normal output, and one for errors
        $this->stdoutStream = $this->setupStdoutStream();
        $this->stderrStream = $this->setupStderrStream();
    }

    /**
     * create a new token stream, attached to stdout
     *
     * @return ConsoleStream
     */
    private function setupStdoutStream()
    {
        return new ConsoleStreamHead(
            $this->streamState,
            new FormattingTokeniser,
            [
                new IndentProcessor,
                new WordWrapProcessor,
                new ThemeProcessor,
            ],
            new StdoutWriter
        );
    }

    /**
     * create a new token stream, attached to stderr
     *
     * @return ConsoleStream
     */
    private function setupStderrStream()
    {
        return new ConsoleStreamHead(
            $this->streamState,
            new FormattingTokeniser,
            [
                new IndentProcessor,
                new WordWrapProcessor,
                new ThemeProcessor,
            ],
            new StderrWriter
        );
    }

    /**
     * write output to the console's stdout
     *
     * this method will automatically convert embedded formatting into
     * the theme's console colours
     *
     * @param  mixed $item
     *         the output to write to the console
     * @return void
     */
    public function write($item)
    {
        $this->stdoutStream->write($item);
    }

    /**
     * write output to the console's stderr
     *
     * this method will automatically convert embedded formatting into
     * the theme's console colours
     *
     * @param  mixed $item
     *         the output to write to the console
     * @return void
     */
    public function writeError($item)
    {
        $this->stderrStream->write($item);
    }

    /**
     * change the amount of indentation that occurs after every new line
     *
     * negative amounts will decrease the amount of indentation, and positive
     * amounts will increase the amount of indentation.
     *
     * if you decrease the amount of indentation too much, this method will
     * automatically handle it by setting the indentation to zero
     *
     * @param  int $amount
     *         the amount of adjustment to make
     * @return void
     */
    public function adjustIndentation($amount)
    {
        $this->stdoutStream->write(new AdjustIndentToken($amount));
    }

    /**
     * set the amount of indentation that occurs after every new line
     *
     * @param  int $amount
     *         the amount to set the indentation to
     * @return void
     */
    public function setIndentation($amount)
    {
        $this->stdoutStream->write(new SetIndentToken($amount));
    }
}