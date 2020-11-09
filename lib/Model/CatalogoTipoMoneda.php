<?php

namespace RCCPM\MX\Client\Model;
use \RCCPM\MX\Client\ObjectSerializer;

class CatalogoTipoMoneda
{
    
    const _001 = '001';
    const _002 = '002';
    const _003 = '003';
    const _004 = '004';
    const _005 = '005';
    const _006 = '006';
    const _007 = '007';
    const _008 = '008';
    const _009 = '009';
    const _010 = '010';
    const _011 = '011';
    const _013 = '013';
    const _014 = '014';
    const _016 = '016';
    const _020 = '020';
    const _022 = '022';
    const _023 = '023';
    const _024 = '024';
    const _025 = '025';
    const _027 = '027';
    const _029 = '029';
    const _030 = '030';
    const _033 = '033';
    const _034 = '034';
    const _035 = '035';
    const _037 = '037';
    const _039 = '039';
    const _040 = '040';
    const _043 = '043';
    const _044 = '044';
    const _045 = '045';
    const _048 = '048';
    const _049 = '049';
    const _053 = '053';
    const _054 = '054';
    const _055 = '055';
    const _056 = '056';
    const _058 = '058';
    const _059 = '059';
    const _061 = '061';
    const _062 = '062';
    const _063 = '063';
    const _065 = '065';
    const _066 = '066';
    const _068 = '068';
    const _070 = '070';
    const _073 = '073';
    const _074 = '074';
    const _075 = '075';
    const _084 = '084';
    const _085 = '085';
    const _086 = '086';
    const _087 = '087';
    const _088 = '088';
    const _090 = '090';
    const _091 = '091';
    const _092 = '092';
    const _093 = '093';
    const _095 = '095';
    const _096 = '096';
    const _097 = '097';
    const _098 = '098';
    const _100 = '100';
    const _102 = '102';
    const _103 = '103';
    const _104 = '104';
    const _105 = '105';
    const _106 = '106';
    const _107 = '107';
    const _108 = '108';
    const _109 = '109';
    const _110 = '110';
    const _112 = '112';
    const _113 = '113';
    const _114 = '114';
    const _115 = '115';
    const _116 = '116';
    const _118 = '118';
    const _120 = '120';
    const _121 = '121';
    const _122 = '122';
    const _123 = '123';
    const _124 = '124';
    const _125 = '125';
    const _126 = '126';
    const _127 = '127';
    const _128 = '128';
    const _129 = '129';
    const _130 = '130';
    const _131 = '131';
    const _132 = '132';
    const _133 = '133';
    const _134 = '134';
    const _135 = '135';
    const _136 = '136';
    const _138 = '138';
    const _140 = '140';
    const _141 = '141';
    const _142 = '142';
    const _143 = '143';
    const _145 = '145';
    const _147 = '147';
    const _149 = '149';
    const _151 = '151';
    const _152 = '152';
    const _153 = '153';
    const _154 = '154';
    const _155 = '155';
    const _156 = '156';
    const _157 = '157';
    const _158 = '158';
    const _160 = '160';
    const _161 = '161';
    const _162 = '162';
    const _165 = '165';
    const _166 = '166';
    const _167 = '167';
    const _168 = '168';
    const _171 = '171';
    const _174 = '174';
    const _175 = '175';
    const _177 = '177';
    const _179 = '179';
    const _180 = '180';
    const _182 = '182';
    const _183 = '183';
    const _184 = '184';
    const _185 = '185';
    const _186 = '186';
    const _187 = '187';
    const _188 = '188';
    const _190 = '190';
    const _191 = '191';
    const _192 = '192';
    const _193 = '193';
    const _194 = '194';
    const _195 = '195';
    const _196 = '196';
    const _198 = '198';
    const _201 = '201';
    const _206 = '206';
    const _207 = '207';
    const _208 = '208';
    const _210 = '210';
    const _211 = '211';
    const _212 = '212';
    const _213 = '213';
    const _215 = '215';
    const _216 = '216';
    const _217 = '217';
    const _218 = '218';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::_001,
            self::_002,
            self::_003,
            self::_004,
            self::_005,
            self::_006,
            self::_007,
            self::_008,
            self::_009,
            self::_010,
            self::_011,
            self::_013,
            self::_014,
            self::_016,
            self::_020,
            self::_022,
            self::_023,
            self::_024,
            self::_025,
            self::_027,
            self::_029,
            self::_030,
            self::_033,
            self::_034,
            self::_035,
            self::_037,
            self::_039,
            self::_040,
            self::_043,
            self::_044,
            self::_045,
            self::_048,
            self::_049,
            self::_053,
            self::_054,
            self::_055,
            self::_056,
            self::_058,
            self::_059,
            self::_061,
            self::_062,
            self::_063,
            self::_065,
            self::_066,
            self::_068,
            self::_070,
            self::_073,
            self::_074,
            self::_075,
            self::_084,
            self::_085,
            self::_086,
            self::_087,
            self::_088,
            self::_090,
            self::_091,
            self::_092,
            self::_093,
            self::_095,
            self::_096,
            self::_097,
            self::_098,
            self::_100,
            self::_102,
            self::_103,
            self::_104,
            self::_105,
            self::_106,
            self::_107,
            self::_108,
            self::_109,
            self::_110,
            self::_112,
            self::_113,
            self::_114,
            self::_115,
            self::_116,
            self::_118,
            self::_120,
            self::_121,
            self::_122,
            self::_123,
            self::_124,
            self::_125,
            self::_126,
            self::_127,
            self::_128,
            self::_129,
            self::_130,
            self::_131,
            self::_132,
            self::_133,
            self::_134,
            self::_135,
            self::_136,
            self::_138,
            self::_140,
            self::_141,
            self::_142,
            self::_143,
            self::_145,
            self::_147,
            self::_149,
            self::_151,
            self::_152,
            self::_153,
            self::_154,
            self::_155,
            self::_156,
            self::_157,
            self::_158,
            self::_160,
            self::_161,
            self::_162,
            self::_165,
            self::_166,
            self::_167,
            self::_168,
            self::_171,
            self::_174,
            self::_175,
            self::_177,
            self::_179,
            self::_180,
            self::_182,
            self::_183,
            self::_184,
            self::_185,
            self::_186,
            self::_187,
            self::_188,
            self::_190,
            self::_191,
            self::_192,
            self::_193,
            self::_194,
            self::_195,
            self::_196,
            self::_198,
            self::_201,
            self::_206,
            self::_207,
            self::_208,
            self::_210,
            self::_211,
            self::_212,
            self::_213,
            self::_215,
            self::_216,
            self::_217,
            self::_218,
        ];
    }
}
