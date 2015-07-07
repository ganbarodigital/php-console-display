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
 * @package   ConsoleDisplay\OutputStreams
 * @author    Stuart Herbert <stuherbert@ganbarodigital.com>
 * @copyright 2010 Gradwell dot com Ltd www.gradwell.com
 * @copyright 2011 Stuart Herbert www.stuartherbert.com
 * @copyright 2015-present Ganbaro Digital Ltd www.ganbarodigital.com
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link      http://code.ganbarodigital.com/php-console-display
 */

namespace GanbaroDigital\ConsoleDisplay\OutputStreams;

use PHPUnit_Framework_TestCase;
use GanbaroDigital\ConsoleDisplay\Internal\TokenProcessors\PassthruProcessor;
use GanbaroDigital\ConsoleDisplay\Internal\TokenTypes;
use GanbaroDigital\ConsoleDisplay\Themes\InMemoryTheme;
use GanbaroDigital\ConsoleDisplay\ValueBuilders\BuildTheme;

/**
 * @coversDefaultClass GanbaroDigital\ConsoleDisplay\OutputStreams\StringStream
 */
class StringStreamTest extends PHPUnit_Framework_TestCase
{
    /**
     * @coversNothing
     */
    public function testCanInstantiate()
    {
        // ----------------------------------------------------------------
        // setup your test

        $buffer="";
        $tokenProcessor = new PassthruProcessor;

        // ----------------------------------------------------------------
        // perform the change

        $obj = new StringStream($buffer, $tokenProcessor);

        // ----------------------------------------------------------------
        // test the results

        $this->assertTrue($obj instanceof StringStream);
    }

    /**
     * @covers ::writePartialLine
     */
    public function testCanWritePartialLine()
    {
        // ----------------------------------------------------------------
        // setup your test

        $buffer = "";
        $tokenProcessor = new PassthruProcessor();
        $stream = new StringStream($buffer, $tokenProcessor);
        $theme = $this->buildEmptyTheme();

        $expectedResult = "hello, world";
        $tokens = [
            new TokenTypes\StringToken($expectedResult)
        ];

        // ----------------------------------------------------------------
        // perform the change

        $stream->writePartialLine($theme, $tokens);

        // ----------------------------------------------------------------
        // test the results

        $this->assertEquals($expectedResult, $buffer);
    }

    /**
     * @covers ::writeFullLine
     */
    public function testCanWriteFullLine()
    {
        // ----------------------------------------------------------------
        // setup your test

        $buffer = "";
        $tokenProcessor = new PassthruProcessor();
        $stream = new StringStream($buffer, $tokenProcessor);
        $theme = $this->buildEmptyTheme();

        $data = "hello, world!";
        $expectedResult = $data . PHP_EOL;
        $tokens = [
            new TokenTypes\StringToken($data),
            new TokenTypes\EolToken()
        ];

        // ----------------------------------------------------------------
        // perform the change

        $stream->writeFullLine($theme, $tokens);

        // ----------------------------------------------------------------
        // test the results

        $this->assertEquals($expectedResult, $buffer);
    }

    /**
     * @covers ::writeFullLine
     */
    public function testCanIndentOutput()
    {
        // ----------------------------------------------------------------
        // setup your test

        $buffer = "";
        $tokenProcessor = new PassthruProcessor();
        $stream = new StringStream($buffer, $tokenProcessor);
        $theme = $this->buildEmptyTheme();

        $data[0] = "hello, world!";
        $data[1] = "goodbye for now!";
        $expectedResult = $data[0] . PHP_EOL . "      " . $data[1] . PHP_EOL;
        $tokens = [
            new TokenTypes\StringToken($data[0]),
            new TokenTypes\EolToken(),
            new TokenTypes\SetIndentToken(6),
            new TokenTypes\StringToken($data[1]),
        ];

        // ----------------------------------------------------------------
        // perform the change

        $stream->writeFullLine($theme, $tokens);

        // ----------------------------------------------------------------
        // test the results

        $this->assertEquals($expectedResult, $buffer);
    }


    protected function buildEmptyTheme()
    {
        return BuildTheme::fromArray([]);
    }
}