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
    const COLOUR_000_FG = "38;5;000";
    const COLOUR_001_FG = "38;5;001";
    const COLOUR_002_FG = "38;5;002";
    const COLOUR_003_FG = "38;5;003";
    const COLOUR_004_FG = "38;5;004";
    const COLOUR_005_FG = "38;5;005";
    const COLOUR_006_FG = "38;5;006";
    const COLOUR_007_FG = "38;5;007";
    const COLOUR_008_FG = "38;5;008";
    const COLOUR_009_FG = "38;5;009";
    const COLOUR_010_FG = "38;5;010";
    const COLOUR_011_FG = "38;5;011";
    const COLOUR_012_FG = "38;5;012";
    const COLOUR_013_FG = "38;5;013";
    const COLOUR_014_FG = "38;5;014";
    const COLOUR_015_FG = "38;5;015";
    const COLOUR_016_FG = "38;5;016";
    const COLOUR_017_FG = "38;5;017";
    const COLOUR_018_FG = "38;5;018";
    const COLOUR_019_FG = "38;5;019";
    const COLOUR_020_FG = "38;5;020";
    const COLOUR_021_FG = "38;5;021";
    const COLOUR_022_FG = "38;5;022";
    const COLOUR_023_FG = "38;5;023";
    const COLOUR_024_FG = "38;5;024";
    const COLOUR_025_FG = "38;5;025";
    const COLOUR_026_FG = "38;5;026";
    const COLOUR_027_FG = "38;5;027";
    const COLOUR_028_FG = "38;5;028";
    const COLOUR_029_FG = "38;5;029";
    const COLOUR_030_FG = "38;5;030";
    const COLOUR_031_FG = "38;5;031";
    const COLOUR_032_FG = "38;5;032";
    const COLOUR_033_FG = "38;5;033";
    const COLOUR_034_FG = "38;5;034";
    const COLOUR_035_FG = "38;5;035";
    const COLOUR_036_FG = "38;5;036";
    const COLOUR_037_FG = "38;5;037";
    const COLOUR_038_FG = "38;5;038";
    const COLOUR_039_FG = "38;5;039";
    const COLOUR_040_FG = "38;5;040";
    const COLOUR_041_FG = "38;5;041";
    const COLOUR_042_FG = "38;5;042";
    const COLOUR_043_FG = "38;5;043";
    const COLOUR_044_FG = "38;5;044";
    const COLOUR_045_FG = "38;5;045";
    const COLOUR_046_FG = "38;5;046";
    const COLOUR_047_FG = "38;5;047";
    const COLOUR_048_FG = "38;5;048";
    const COLOUR_049_FG = "38;5;049";
    const COLOUR_050_FG = "38;5;050";
    const COLOUR_051_FG = "38;5;051";
    const COLOUR_052_FG = "38;5;052";
    const COLOUR_053_FG = "38;5;053";
    const COLOUR_054_FG = "38;5;054";
    const COLOUR_055_FG = "38;5;055";
    const COLOUR_056_FG = "38;5;056";
    const COLOUR_057_FG = "38;5;057";
    const COLOUR_058_FG = "38;5;058";
    const COLOUR_059_FG = "38;5;059";
    const COLOUR_060_FG = "38;5;060";
    const COLOUR_061_FG = "38;5;061";
    const COLOUR_062_FG = "38;5;062";
    const COLOUR_063_FG = "38;5;063";
    const COLOUR_064_FG = "38;5;064";
    const COLOUR_065_FG = "38;5;065";
    const COLOUR_066_FG = "38;5;066";
    const COLOUR_067_FG = "38;5;067";
    const COLOUR_068_FG = "38;5;068";
    const COLOUR_069_FG = "38;5;069";
    const COLOUR_070_FG = "38;5;070";
    const COLOUR_071_FG = "38;5;071";
    const COLOUR_072_FG = "38;5;072";
    const COLOUR_073_FG = "38;5;073";
    const COLOUR_074_FG = "38;5;074";
    const COLOUR_075_FG = "38;5;075";
    const COLOUR_076_FG = "38;5;076";
    const COLOUR_077_FG = "38;5;077";
    const COLOUR_078_FG = "38;5;078";
    const COLOUR_079_FG = "38;5;079";
    const COLOUR_080_FG = "38;5;080";
    const COLOUR_081_FG = "38;5;081";
    const COLOUR_082_FG = "38;5;082";
    const COLOUR_083_FG = "38;5;083";
    const COLOUR_084_FG = "38;5;084";
    const COLOUR_085_FG = "38;5;085";
    const COLOUR_086_FG = "38;5;086";
    const COLOUR_087_FG = "38;5;087";
    const COLOUR_088_FG = "38;5;088";
    const COLOUR_089_FG = "38;5;089";
    const COLOUR_090_FG = "38;5;090";
    const COLOUR_091_FG = "38;5;091";
    const COLOUR_092_FG = "38;5;092";
    const COLOUR_093_FG = "38;5;093";
    const COLOUR_094_FG = "38;5;094";
    const COLOUR_095_FG = "38;5;095";
    const COLOUR_096_FG = "38;5;096";
    const COLOUR_097_FG = "38;5;097";
    const COLOUR_098_FG = "38;5;098";
    const COLOUR_099_FG = "38;5;099";
    const COLOUR_100_FG = "38;5;100";
    const COLOUR_101_FG = "38;5;101";
    const COLOUR_102_FG = "38;5;102";
    const COLOUR_103_FG = "38;5;103";
    const COLOUR_104_FG = "38;5;104";
    const COLOUR_105_FG = "38;5;105";
    const COLOUR_106_FG = "38;5;106";
    const COLOUR_107_FG = "38;5;107";
    const COLOUR_108_FG = "38;5;108";
    const COLOUR_109_FG = "38;5;109";
    const COLOUR_110_FG = "38;5;110";
    const COLOUR_111_FG = "38;5;111";
    const COLOUR_112_FG = "38;5;112";
    const COLOUR_113_FG = "38;5;113";
    const COLOUR_114_FG = "38;5;114";
    const COLOUR_115_FG = "38;5;115";
    const COLOUR_116_FG = "38;5;116";
    const COLOUR_117_FG = "38;5;117";
    const COLOUR_118_FG = "38;5;118";
    const COLOUR_119_FG = "38;5;119";
    const COLOUR_120_FG = "38;5;120";
    const COLOUR_121_FG = "38;5;121";
    const COLOUR_122_FG = "38;5;122";
    const COLOUR_123_FG = "38;5;123";
    const COLOUR_124_FG = "38;5;124";
    const COLOUR_125_FG = "38;5;125";
    const COLOUR_126_FG = "38;5;126";
    const COLOUR_127_FG = "38;5;127";
    const COLOUR_128_FG = "38;5;128";
    const COLOUR_129_FG = "38;5;129";
    const COLOUR_130_FG = "38;5;130";
    const COLOUR_131_FG = "38;5;131";
    const COLOUR_132_FG = "38;5;132";
    const COLOUR_133_FG = "38;5;133";
    const COLOUR_134_FG = "38;5;134";
    const COLOUR_135_FG = "38;5;135";
    const COLOUR_136_FG = "38;5;136";
    const COLOUR_137_FG = "38;5;137";
    const COLOUR_138_FG = "38;5;138";
    const COLOUR_139_FG = "38;5;139";
    const COLOUR_140_FG = "38;5;140";
    const COLOUR_141_FG = "38;5;141";
    const COLOUR_142_FG = "38;5;142";
    const COLOUR_143_FG = "38;5;143";
    const COLOUR_144_FG = "38;5;144";
    const COLOUR_145_FG = "38;5;145";
    const COLOUR_146_FG = "38;5;146";
    const COLOUR_147_FG = "38;5;147";
    const COLOUR_148_FG = "38;5;148";
    const COLOUR_149_FG = "38;5;149";
    const COLOUR_150_FG = "38;5;150";
    const COLOUR_151_FG = "38;5;151";
    const COLOUR_152_FG = "38;5;152";
    const COLOUR_153_FG = "38;5;153";
    const COLOUR_154_FG = "38;5;154";
    const COLOUR_155_FG = "38;5;155";
    const COLOUR_156_FG = "38;5;156";
    const COLOUR_157_FG = "38;5;157";
    const COLOUR_158_FG = "38;5;158";
    const COLOUR_159_FG = "38;5;159";
    const COLOUR_160_FG = "38;5;160";
    const COLOUR_161_FG = "38;5;161";
    const COLOUR_162_FG = "38;5;162";
    const COLOUR_163_FG = "38;5;163";
    const COLOUR_164_FG = "38;5;164";
    const COLOUR_165_FG = "38;5;165";
    const COLOUR_166_FG = "38;5;166";
    const COLOUR_167_FG = "38;5;167";
    const COLOUR_168_FG = "38;5;168";
    const COLOUR_169_FG = "38;5;169";
    const COLOUR_170_FG = "38;5;170";
    const COLOUR_171_FG = "38;5;171";
    const COLOUR_172_FG = "38;5;172";
    const COLOUR_173_FG = "38;5;173";
    const COLOUR_174_FG = "38;5;174";
    const COLOUR_175_FG = "38;5;175";
    const COLOUR_176_FG = "38;5;176";
    const COLOUR_177_FG = "38;5;177";
    const COLOUR_178_FG = "38;5;178";
    const COLOUR_179_FG = "38;5;179";
    const COLOUR_180_FG = "38;5;180";
    const COLOUR_181_FG = "38;5;181";
    const COLOUR_182_FG = "38;5;182";
    const COLOUR_183_FG = "38;5;183";
    const COLOUR_184_FG = "38;5;184";
    const COLOUR_185_FG = "38;5;185";
    const COLOUR_186_FG = "38;5;186";
    const COLOUR_187_FG = "38;5;187";
    const COLOUR_188_FG = "38;5;188";
    const COLOUR_189_FG = "38;5;189";
    const COLOUR_190_FG = "38;5;190";
    const COLOUR_191_FG = "38;5;191";
    const COLOUR_192_FG = "38;5;192";
    const COLOUR_193_FG = "38;5;193";
    const COLOUR_194_FG = "38;5;194";
    const COLOUR_195_FG = "38;5;195";
    const COLOUR_196_FG = "38;5;196";
    const COLOUR_197_FG = "38;5;197";
    const COLOUR_198_FG = "38;5;198";
    const COLOUR_199_FG = "38;5;199";
    const COLOUR_200_FG = "38;5;200";
    const COLOUR_201_FG = "38;5;201";
    const COLOUR_202_FG = "38;5;202";
    const COLOUR_203_FG = "38;5;203";
    const COLOUR_204_FG = "38;5;204";
    const COLOUR_205_FG = "38;5;205";
    const COLOUR_206_FG = "38;5;206";
    const COLOUR_207_FG = "38;5;207";
    const COLOUR_208_FG = "38;5;208";
    const COLOUR_209_FG = "38;5;209";
    const COLOUR_210_FG = "38;5;210";
    const COLOUR_211_FG = "38;5;211";
    const COLOUR_212_FG = "38;5;212";
    const COLOUR_213_FG = "38;5;213";
    const COLOUR_214_FG = "38;5;214";
    const COLOUR_215_FG = "38;5;215";
    const COLOUR_216_FG = "38;5;216";
    const COLOUR_217_FG = "38;5;217";
    const COLOUR_218_FG = "38;5;218";
    const COLOUR_219_FG = "38;5;219";
    const COLOUR_220_FG = "38;5;220";
    const COLOUR_221_FG = "38;5;221";
    const COLOUR_222_FG = "38;5;222";
    const COLOUR_223_FG = "38;5;223";
    const COLOUR_224_FG = "38;5;224";
    const COLOUR_225_FG = "38;5;225";
    const COLOUR_226_FG = "38;5;226";
    const COLOUR_227_FG = "38;5;227";
    const COLOUR_228_FG = "38;5;228";
    const COLOUR_229_FG = "38;5;229";
    const COLOUR_230_FG = "38;5;230";
    const COLOUR_231_FG = "38;5;231";
    const COLOUR_232_FG = "38;5;232";
    const COLOUR_233_FG = "38;5;233";
    const COLOUR_234_FG = "38;5;234";
    const COLOUR_235_FG = "38;5;235";
    const COLOUR_236_FG = "38;5;236";
    const COLOUR_237_FG = "38;5;237";
    const COLOUR_238_FG = "38;5;238";
    const COLOUR_239_FG = "38;5;239";
    const COLOUR_240_FG = "38;5;240";
    const COLOUR_241_FG = "38;5;241";
    const COLOUR_242_FG = "38;5;242";
    const COLOUR_243_FG = "38;5;243";
    const COLOUR_244_FG = "38;5;244";
    const COLOUR_245_FG = "38;5;245";
    const COLOUR_246_FG = "38;5;246";
    const COLOUR_247_FG = "38;5;247";
    const COLOUR_248_FG = "38;5;248";
    const COLOUR_249_FG = "38;5;249";
    const COLOUR_250_FG = "38;5;250";
    const COLOUR_251_FG = "38;5;251";
    const COLOUR_252_FG = "38;5;252";
    const COLOUR_253_FG = "38;5;253";
    const COLOUR_254_FG = "38;5;254";
    const COLOUR_255_FG = "38;5;255";

    const COLOUR_000_BG = "48;5;000";
    const COLOUR_001_BG = "48;5;001";
    const COLOUR_002_BG = "48;5;002";
    const COLOUR_003_BG = "48;5;003";
    const COLOUR_004_BG = "48;5;004";
    const COLOUR_005_BG = "48;5;005";
    const COLOUR_006_BG = "48;5;006";
    const COLOUR_007_BG = "48;5;007";
    const COLOUR_008_BG = "48;5;008";
    const COLOUR_009_BG = "48;5;009";
    const COLOUR_010_BG = "48;5;010";
    const COLOUR_011_BG = "48;5;011";
    const COLOUR_012_BG = "48;5;012";
    const COLOUR_013_BG = "48;5;013";
    const COLOUR_014_BG = "48;5;014";
    const COLOUR_015_BG = "48;5;015";
    const COLOUR_016_BG = "48;5;016";
    const COLOUR_017_BG = "48;5;017";
    const COLOUR_018_BG = "48;5;018";
    const COLOUR_019_BG = "48;5;019";
    const COLOUR_020_BG = "48;5;020";
    const COLOUR_021_BG = "48;5;021";
    const COLOUR_022_BG = "48;5;022";
    const COLOUR_023_BG = "48;5;023";
    const COLOUR_024_BG = "48;5;024";
    const COLOUR_025_BG = "48;5;025";
    const COLOUR_026_BG = "48;5;026";
    const COLOUR_027_BG = "48;5;027";
    const COLOUR_028_BG = "48;5;028";
    const COLOUR_029_BG = "48;5;029";
    const COLOUR_030_BG = "48;5;030";
    const COLOUR_031_BG = "48;5;031";
    const COLOUR_032_BG = "48;5;032";
    const COLOUR_033_BG = "48;5;033";
    const COLOUR_034_BG = "48;5;034";
    const COLOUR_035_BG = "48;5;035";
    const COLOUR_036_BG = "48;5;036";
    const COLOUR_037_BG = "48;5;037";
    const COLOUR_038_BG = "48;5;038";
    const COLOUR_039_BG = "48;5;039";
    const COLOUR_040_BG = "48;5;040";
    const COLOUR_041_BG = "48;5;041";
    const COLOUR_042_BG = "48;5;042";
    const COLOUR_043_BG = "48;5;043";
    const COLOUR_044_BG = "48;5;044";
    const COLOUR_045_BG = "48;5;045";
    const COLOUR_046_BG = "48;5;046";
    const COLOUR_047_BG = "48;5;047";
    const COLOUR_048_BG = "48;5;048";
    const COLOUR_049_BG = "48;5;049";
    const COLOUR_050_BG = "48;5;050";
    const COLOUR_051_BG = "48;5;051";
    const COLOUR_052_BG = "48;5;052";
    const COLOUR_053_BG = "48;5;053";
    const COLOUR_054_BG = "48;5;054";
    const COLOUR_055_BG = "48;5;055";
    const COLOUR_056_BG = "48;5;056";
    const COLOUR_057_BG = "48;5;057";
    const COLOUR_058_BG = "48;5;058";
    const COLOUR_059_BG = "48;5;059";
    const COLOUR_060_BG = "48;5;060";
    const COLOUR_061_BG = "48;5;061";
    const COLOUR_062_BG = "48;5;062";
    const COLOUR_063_BG = "48;5;063";
    const COLOUR_064_BG = "48;5;064";
    const COLOUR_065_BG = "48;5;065";
    const COLOUR_066_BG = "48;5;066";
    const COLOUR_067_BG = "48;5;067";
    const COLOUR_068_BG = "48;5;068";
    const COLOUR_069_BG = "48;5;069";
    const COLOUR_070_BG = "48;5;070";
    const COLOUR_071_BG = "48;5;071";
    const COLOUR_072_BG = "48;5;072";
    const COLOUR_073_BG = "48;5;073";
    const COLOUR_074_BG = "48;5;074";
    const COLOUR_075_BG = "48;5;075";
    const COLOUR_076_BG = "48;5;076";
    const COLOUR_077_BG = "48;5;077";
    const COLOUR_078_BG = "48;5;078";
    const COLOUR_079_BG = "48;5;079";
    const COLOUR_080_BG = "48;5;080";
    const COLOUR_081_BG = "48;5;081";
    const COLOUR_082_BG = "48;5;082";
    const COLOUR_083_BG = "48;5;083";
    const COLOUR_084_BG = "48;5;084";
    const COLOUR_085_BG = "48;5;085";
    const COLOUR_086_BG = "48;5;086";
    const COLOUR_087_BG = "48;5;087";
    const COLOUR_088_BG = "48;5;088";
    const COLOUR_089_BG = "48;5;089";
    const COLOUR_090_BG = "48;5;090";
    const COLOUR_091_BG = "48;5;091";
    const COLOUR_092_BG = "48;5;092";
    const COLOUR_093_BG = "48;5;093";
    const COLOUR_094_BG = "48;5;094";
    const COLOUR_095_BG = "48;5;095";
    const COLOUR_096_BG = "48;5;096";
    const COLOUR_097_BG = "48;5;097";
    const COLOUR_098_BG = "48;5;098";
    const COLOUR_099_BG = "48;5;099";
    const COLOUR_100_BG = "48;5;100";
    const COLOUR_101_BG = "48;5;101";
    const COLOUR_102_BG = "48;5;102";
    const COLOUR_103_BG = "48;5;103";
    const COLOUR_104_BG = "48;5;104";
    const COLOUR_105_BG = "48;5;105";
    const COLOUR_106_BG = "48;5;106";
    const COLOUR_107_BG = "48;5;107";
    const COLOUR_108_BG = "48;5;108";
    const COLOUR_109_BG = "48;5;109";
    const COLOUR_110_BG = "48;5;110";
    const COLOUR_111_BG = "48;5;111";
    const COLOUR_112_BG = "48;5;112";
    const COLOUR_113_BG = "48;5;113";
    const COLOUR_114_BG = "48;5;114";
    const COLOUR_115_BG = "48;5;115";
    const COLOUR_116_BG = "48;5;116";
    const COLOUR_117_BG = "48;5;117";
    const COLOUR_118_BG = "48;5;118";
    const COLOUR_119_BG = "48;5;119";
    const COLOUR_120_BG = "48;5;120";
    const COLOUR_121_BG = "48;5;121";
    const COLOUR_122_BG = "48;5;122";
    const COLOUR_123_BG = "48;5;123";
    const COLOUR_124_BG = "48;5;124";
    const COLOUR_125_BG = "48;5;125";
    const COLOUR_126_BG = "48;5;126";
    const COLOUR_127_BG = "48;5;127";
    const COLOUR_128_BG = "48;5;128";
    const COLOUR_129_BG = "48;5;129";
    const COLOUR_130_BG = "48;5;130";
    const COLOUR_131_BG = "48;5;131";
    const COLOUR_132_BG = "48;5;132";
    const COLOUR_133_BG = "48;5;133";
    const COLOUR_134_BG = "48;5;134";
    const COLOUR_135_BG = "48;5;135";
    const COLOUR_136_BG = "48;5;136";
    const COLOUR_137_BG = "48;5;137";
    const COLOUR_138_BG = "48;5;138";
    const COLOUR_139_BG = "48;5;139";
    const COLOUR_140_BG = "48;5;140";
    const COLOUR_141_BG = "48;5;141";
    const COLOUR_142_BG = "48;5;142";
    const COLOUR_143_BG = "48;5;143";
    const COLOUR_144_BG = "48;5;144";
    const COLOUR_145_BG = "48;5;145";
    const COLOUR_146_BG = "48;5;146";
    const COLOUR_147_BG = "48;5;147";
    const COLOUR_148_BG = "48;5;148";
    const COLOUR_149_BG = "48;5;149";
    const COLOUR_150_BG = "48;5;150";
    const COLOUR_151_BG = "48;5;151";
    const COLOUR_152_BG = "48;5;152";
    const COLOUR_153_BG = "48;5;153";
    const COLOUR_154_BG = "48;5;154";
    const COLOUR_155_BG = "48;5;155";
    const COLOUR_156_BG = "48;5;156";
    const COLOUR_157_BG = "48;5;157";
    const COLOUR_158_BG = "48;5;158";
    const COLOUR_159_BG = "48;5;159";
    const COLOUR_160_BG = "48;5;160";
    const COLOUR_161_BG = "48;5;161";
    const COLOUR_162_BG = "48;5;162";
    const COLOUR_163_BG = "48;5;163";
    const COLOUR_164_BG = "48;5;164";
    const COLOUR_165_BG = "48;5;165";
    const COLOUR_166_BG = "48;5;166";
    const COLOUR_167_BG = "48;5;167";
    const COLOUR_168_BG = "48;5;168";
    const COLOUR_169_BG = "48;5;169";
    const COLOUR_170_BG = "48;5;170";
    const COLOUR_171_BG = "48;5;171";
    const COLOUR_172_BG = "48;5;172";
    const COLOUR_173_BG = "48;5;173";
    const COLOUR_174_BG = "48;5;174";
    const COLOUR_175_BG = "48;5;175";
    const COLOUR_176_BG = "48;5;176";
    const COLOUR_177_BG = "48;5;177";
    const COLOUR_178_BG = "48;5;178";
    const COLOUR_179_BG = "48;5;179";
    const COLOUR_180_BG = "48;5;180";
    const COLOUR_181_BG = "48;5;181";
    const COLOUR_182_BG = "48;5;182";
    const COLOUR_183_BG = "48;5;183";
    const COLOUR_184_BG = "48;5;184";
    const COLOUR_185_BG = "48;5;185";
    const COLOUR_186_BG = "48;5;186";
    const COLOUR_187_BG = "48;5;187";
    const COLOUR_188_BG = "48;5;188";
    const COLOUR_189_BG = "48;5;189";
    const COLOUR_190_BG = "48;5;190";
    const COLOUR_191_BG = "48;5;191";
    const COLOUR_192_BG = "48;5;192";
    const COLOUR_193_BG = "48;5;193";
    const COLOUR_194_BG = "48;5;194";
    const COLOUR_195_BG = "48;5;195";
    const COLOUR_196_BG = "48;5;196";
    const COLOUR_197_BG = "48;5;197";
    const COLOUR_198_BG = "48;5;198";
    const COLOUR_199_BG = "48;5;199";
    const COLOUR_200_BG = "48;5;200";
    const COLOUR_201_BG = "48;5;201";
    const COLOUR_202_BG = "48;5;202";
    const COLOUR_203_BG = "48;5;203";
    const COLOUR_204_BG = "48;5;204";
    const COLOUR_205_BG = "48;5;205";
    const COLOUR_206_BG = "48;5;206";
    const COLOUR_207_BG = "48;5;207";
    const COLOUR_208_BG = "48;5;208";
    const COLOUR_209_BG = "48;5;209";
    const COLOUR_210_BG = "48;5;210";
    const COLOUR_211_BG = "48;5;211";
    const COLOUR_212_BG = "48;5;212";
    const COLOUR_213_BG = "48;5;213";
    const COLOUR_214_BG = "48;5;214";
    const COLOUR_215_BG = "48;5;215";
    const COLOUR_216_BG = "48;5;216";
    const COLOUR_217_BG = "48;5;217";
    const COLOUR_218_BG = "48;5;218";
    const COLOUR_219_BG = "48;5;219";
    const COLOUR_220_BG = "48;5;220";
    const COLOUR_221_BG = "48;5;221";
    const COLOUR_222_BG = "48;5;222";
    const COLOUR_223_BG = "48;5;223";
    const COLOUR_224_BG = "48;5;224";
    const COLOUR_225_BG = "48;5;225";
    const COLOUR_226_BG = "48;5;226";
    const COLOUR_227_BG = "48;5;227";
    const COLOUR_228_BG = "48;5;228";
    const COLOUR_229_BG = "48;5;229";
    const COLOUR_230_BG = "48;5;230";
    const COLOUR_231_BG = "48;5;231";
    const COLOUR_232_BG = "48;5;232";
    const COLOUR_233_BG = "48;5;233";
    const COLOUR_234_BG = "48;5;234";
    const COLOUR_235_BG = "48;5;235";
    const COLOUR_236_BG = "48;5;236";
    const COLOUR_237_BG = "48;5;237";
    const COLOUR_238_BG = "48;5;238";
    const COLOUR_239_BG = "48;5;239";
    const COLOUR_240_BG = "48;5;240";
    const COLOUR_241_BG = "48;5;241";
    const COLOUR_242_BG = "48;5;242";
    const COLOUR_243_BG = "48;5;243";
    const COLOUR_244_BG = "48;5;244";
    const COLOUR_245_BG = "48;5;245";
    const COLOUR_246_BG = "48;5;246";
    const COLOUR_247_BG = "48;5;247";
    const COLOUR_248_BG = "48;5;248";
    const COLOUR_249_BG = "48;5;249";
    const COLOUR_250_BG = "48;5;250";
    const COLOUR_251_BG = "48;5;251";
    const COLOUR_252_BG = "48;5;252";
    const COLOUR_253_BG = "48;5;253";
    const COLOUR_254_BG = "48;5;254";
    const COLOUR_255_BG = "48;5;255";

    /**
     * Basic escape sequence string. Use sprintf() to insert escape codes.
     *
     * See http://misc.flogisoft.com/bash/tip_colors_and_formatting
     *
     * @var string
     */
    const ESCAPE_SEQUENCE = "\033[%sm";
}