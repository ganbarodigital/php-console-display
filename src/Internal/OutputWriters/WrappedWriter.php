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

namespace GanbaroDigital\ConsoleDisplay\Internal\OutputWriters;

class WrappedWriter implements IndentingWriter
{
    /**
     * how far along the line are we?
     *
     * @var integer
     */
    private $linePos = 0;

    /**
     * how far does each line need to indent?
     * @var integer
     */
    private $indentTo = 0;

    /**
     * this is the output writer that we are wrapping
     * @var OutputWriter
     */
    private $wrappedWriter;

    /**
     * we swallow up an output writer
     *
     * @param OutputWriter $outputWriter
     *        the output writer that we wrap
     */
    public function __construct(OutputWriter $outputWriter)
    {
        $this->wrappedWriter = $outputWriter;
    }

    /**
     * write a string to the output stream
     *
     * @param  string $output
     *         the string to write
     * @return void
     */
    public function writeContent($output)
    {
        // do we need to indent before we write?
        if ($this->linePos === 0 && $this->indentTo > 0) {
            $this->wrappedWriter->writeIndent($this->indentTo);
        }

        // write the content
        $this->wrappedWriter->writeContent($output);

        // keep track of where we are
        $this->linePos += strlen($output);
    }

    /**
     * write a string of control code(s) to the output stream
     *
     * it is up to each stream to decide whether or not control codes
     * affect the current line position
     *
     * @param  string $output
     *         the control codes to write
     * @return void
     */
    public function writeControlCodes($output)
    {
        $this->wrappedWriter->writeControlCodes($output);
    }

    /**
     * write a new-line character sequence to the output stream
     *
     * @return void
     */
    public function writeNewline()
    {
        $this->wrappedWriter->writeNewline();
        $this->linePos = 0;
    }

    /**
     * what is the current line position?
     *
     * @return int
     */
    public function getLinePos()
    {
        return $this->linePos;
    }

    /**
     * adjust the indentation amount
     *
     * @param int $indentAdjustment
     *        the amount to adjust by (use negative values to reduce indent)
     * @return void
     */
    public function adjustIndent($indentAdjustment)
    {
        $this->indentTo += $indentAdjustment;
        if ($this->indentTo < 0) {
            $this->indentTo = 0;
        }
    }

    /**
     * tell us exactly how much to indent each line by
     *
     * @param int $indentTo
     *        the amount to indent by
     * @return void
     */
    public function setIndent($indentTo)
    {
        $this->indentTo = $indentTo;
    }
}