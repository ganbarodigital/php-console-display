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

class TwoFiveSixColourChart
{
    // see https://upload.wikimedia.org/wikipedia/en/1/15/Xterm_256color_chart.svg
    const COLOUR_000 = "000";
    const COLOUR_001 = "001";
    const COLOUR_002 = "002";
    const COLOUR_003 = "003";
    const COLOUR_004 = "004";
    const COLOUR_005 = "005";
    const COLOUR_006 = "006";
    const COLOUR_007 = "007";
    const COLOUR_008 = "008";
    const COLOUR_009 = "009";
    const COLOUR_010 = "010";
    const COLOUR_011 = "011";
    const COLOUR_012 = "012";
    const COLOUR_013 = "013";
    const COLOUR_014 = "014";
    const COLOUR_015 = "015";
    const COLOUR_016 = "016";
    const COLOUR_017 = "017";
    const COLOUR_018 = "018";
    const COLOUR_019 = "019";
    const COLOUR_020 = "020";
    const COLOUR_021 = "021";
    const COLOUR_022 = "022";
    const COLOUR_023 = "023";
    const COLOUR_024 = "024";
    const COLOUR_025 = "025";
    const COLOUR_026 = "026";
    const COLOUR_027 = "027";
    const COLOUR_028 = "028";
    const COLOUR_029 = "029";
    const COLOUR_030 = "030";
    const COLOUR_031 = "031";
    const COLOUR_032 = "032";
    const COLOUR_033 = "033";
    const COLOUR_034 = "034";
    const COLOUR_035 = "035";
    const COLOUR_036 = "036";
    const COLOUR_037 = "037";
    const COLOUR_038 = "038";
    const COLOUR_039 = "039";
    const COLOUR_040 = "040";
    const COLOUR_041 = "041";
    const COLOUR_042 = "042";
    const COLOUR_043 = "043";
    const COLOUR_044 = "044";
    const COLOUR_045 = "045";
    const COLOUR_046 = "046";
    const COLOUR_047 = "047";
    const COLOUR_048 = "048";
    const COLOUR_049 = "049";
    const COLOUR_050 = "050";
    const COLOUR_051 = "051";
    const COLOUR_052 = "052";
    const COLOUR_053 = "053";
    const COLOUR_054 = "054";
    const COLOUR_055 = "055";
    const COLOUR_056 = "056";
    const COLOUR_057 = "057";
    const COLOUR_058 = "058";
    const COLOUR_059 = "059";
    const COLOUR_060 = "060";
    const COLOUR_061 = "061";
    const COLOUR_062 = "062";
    const COLOUR_063 = "063";
    const COLOUR_064 = "064";
    const COLOUR_065 = "065";
    const COLOUR_066 = "066";
    const COLOUR_067 = "067";
    const COLOUR_068 = "068";
    const COLOUR_069 = "069";
    const COLOUR_070 = "070";
    const COLOUR_071 = "071";
    const COLOUR_072 = "072";
    const COLOUR_073 = "073";
    const COLOUR_074 = "074";
    const COLOUR_075 = "075";
    const COLOUR_076 = "076";
    const COLOUR_077 = "077";
    const COLOUR_078 = "078";
    const COLOUR_079 = "079";
    const COLOUR_080 = "080";
    const COLOUR_081 = "081";
    const COLOUR_082 = "082";
    const COLOUR_083 = "083";
    const COLOUR_084 = "084";
    const COLOUR_085 = "085";
    const COLOUR_086 = "086";
    const COLOUR_087 = "087";
    const COLOUR_088 = "088";
    const COLOUR_089 = "089";
    const COLOUR_090 = "090";
    const COLOUR_091 = "091";
    const COLOUR_092 = "092";
    const COLOUR_093 = "093";
    const COLOUR_094 = "094";
    const COLOUR_095 = "095";
    const COLOUR_096 = "096";
    const COLOUR_097 = "097";
    const COLOUR_098 = "098";
    const COLOUR_099 = "099";
    const COLOUR_100 = "100";
    const COLOUR_101 = "101";
    const COLOUR_102 = "102";
    const COLOUR_103 = "103";
    const COLOUR_104 = "104";
    const COLOUR_105 = "105";
    const COLOUR_106 = "106";
    const COLOUR_107 = "107";
    const COLOUR_108 = "108";
    const COLOUR_109 = "109";
    const COLOUR_110 = "110";
    const COLOUR_111 = "111";
    const COLOUR_112 = "112";
    const COLOUR_113 = "113";
    const COLOUR_114 = "114";
    const COLOUR_115 = "115";
    const COLOUR_116 = "116";
    const COLOUR_117 = "117";
    const COLOUR_118 = "118";
    const COLOUR_119 = "119";
    const COLOUR_120 = "120";
    const COLOUR_121 = "121";
    const COLOUR_122 = "122";
    const COLOUR_123 = "123";
    const COLOUR_124 = "124";
    const COLOUR_125 = "125";
    const COLOUR_126 = "126";
    const COLOUR_127 = "127";
    const COLOUR_128 = "128";
    const COLOUR_129 = "129";
    const COLOUR_130 = "130";
    const COLOUR_131 = "131";
    const COLOUR_132 = "132";
    const COLOUR_133 = "133";
    const COLOUR_134 = "134";
    const COLOUR_135 = "135";
    const COLOUR_136 = "136";
    const COLOUR_137 = "137";
    const COLOUR_138 = "138";
    const COLOUR_139 = "139";
    const COLOUR_140 = "140";
    const COLOUR_141 = "141";
    const COLOUR_142 = "142";
    const COLOUR_143 = "143";
    const COLOUR_144 = "144";
    const COLOUR_145 = "145";
    const COLOUR_146 = "146";
    const COLOUR_147 = "147";
    const COLOUR_148 = "148";
    const COLOUR_149 = "149";
    const COLOUR_150 = "150";
    const COLOUR_151 = "151";
    const COLOUR_152 = "152";
    const COLOUR_153 = "153";
    const COLOUR_154 = "154";
    const COLOUR_155 = "155";
    const COLOUR_156 = "156";
    const COLOUR_157 = "157";
    const COLOUR_158 = "158";
    const COLOUR_159 = "159";
    const COLOUR_160 = "160";
    const COLOUR_161 = "161";
    const COLOUR_162 = "162";
    const COLOUR_163 = "163";
    const COLOUR_164 = "164";
    const COLOUR_165 = "165";
    const COLOUR_166 = "166";
    const COLOUR_167 = "167";
    const COLOUR_168 = "168";
    const COLOUR_169 = "169";
    const COLOUR_170 = "170";
    const COLOUR_171 = "171";
    const COLOUR_172 = "172";
    const COLOUR_173 = "173";
    const COLOUR_174 = "174";
    const COLOUR_175 = "175";
    const COLOUR_176 = "176";
    const COLOUR_177 = "177";
    const COLOUR_178 = "178";
    const COLOUR_179 = "179";
    const COLOUR_180 = "180";
    const COLOUR_181 = "181";
    const COLOUR_182 = "182";
    const COLOUR_183 = "183";
    const COLOUR_184 = "184";
    const COLOUR_185 = "185";
    const COLOUR_186 = "186";
    const COLOUR_187 = "187";
    const COLOUR_188 = "188";
    const COLOUR_189 = "189";
    const COLOUR_190 = "190";
    const COLOUR_191 = "191";
    const COLOUR_192 = "192";
    const COLOUR_193 = "193";
    const COLOUR_194 = "194";
    const COLOUR_195 = "195";
    const COLOUR_196 = "196";
    const COLOUR_197 = "197";
    const COLOUR_198 = "198";
    const COLOUR_199 = "199";
    const COLOUR_200 = "200";
    const COLOUR_201 = "201";
    const COLOUR_202 = "202";
    const COLOUR_203 = "203";
    const COLOUR_204 = "204";
    const COLOUR_205 = "205";
    const COLOUR_206 = "206";
    const COLOUR_207 = "207";
    const COLOUR_208 = "208";
    const COLOUR_209 = "209";
    const COLOUR_210 = "210";
    const COLOUR_211 = "211";
    const COLOUR_212 = "212";
    const COLOUR_213 = "213";
    const COLOUR_214 = "214";
    const COLOUR_215 = "215";
    const COLOUR_216 = "216";
    const COLOUR_217 = "217";
    const COLOUR_218 = "218";
    const COLOUR_219 = "219";
    const COLOUR_220 = "220";
    const COLOUR_221 = "221";
    const COLOUR_222 = "222";
    const COLOUR_223 = "223";
    const COLOUR_224 = "224";
    const COLOUR_225 = "225";
    const COLOUR_226 = "226";
    const COLOUR_227 = "227";
    const COLOUR_228 = "228";
    const COLOUR_229 = "229";
    const COLOUR_230 = "230";
    const COLOUR_231 = "231";
    const COLOUR_232 = "232";
    const COLOUR_233 = "233";
    const COLOUR_234 = "234";
    const COLOUR_235 = "235";
    const COLOUR_236 = "236";
    const COLOUR_237 = "237";
    const COLOUR_238 = "238";
    const COLOUR_239 = "239";
    const COLOUR_240 = "240";
    const COLOUR_241 = "241";
    const COLOUR_242 = "242";
    const COLOUR_243 = "243";
    const COLOUR_244 = "244";
    const COLOUR_245 = "245";
    const COLOUR_246 = "246";
    const COLOUR_247 = "247";
    const COLOUR_248 = "248";
    const COLOUR_249 = "249";
    const COLOUR_250 = "250";
    const COLOUR_251 = "251";
    const COLOUR_252 = "252";
    const COLOUR_253 = "253";
    const COLOUR_254 = "254";
    const COLOUR_255 = "255";

    /**
     * Basic escape sequence string. Use sprintf() to insert escape codes.
     *
     * See http://misc.flogisoft.com/bash/tip_colors_and_formatting
     *
     * @var string
     */
    const FG_ESCAPE_SEQUENCE = "\033[38;5;%sm";
    const BG_ESCAPE_SEQUENCE = "\033[48;5;%sm";

}