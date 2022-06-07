<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Language;

use PrinsFrank\Standards\Enum;
use RuntimeException;

/**
 * @source https://www.loc.gov/standards/iso639-2/php/code_list.php
 */
enum ISO639_1: string
{
    case Abkhazian                                                                    = 'ab';
    case Afar                                                                         = 'aa';
    case Afrikaans                                                                    = 'af';
    case Akan                                                                         = 'ak';
    case Albanian                                                                     = 'sq';
    case Amharic                                                                      = 'am';
    case Arabic                                                                       = 'ar';
    case Aragonese                                                                    = 'an';
    case Armenian                                                                     = 'hy';
    case Assamese                                                                     = 'as';
    case Avaric                                                                       = 'av';
    case Avestan                                                                      = 'ae';
    case Aymara                                                                       = 'ay';
    case Azerbaijani                                                                  = 'az';
    case Bambara                                                                      = 'bm';
    case Bashkir                                                                      = 'ba';
    case Basque                                                                       = 'eu';
    case Belarusian                                                                   = 'be';
    case Bengali                                                                      = 'bn';
    case Bihari_languages                                                             = 'bh';
    case Bislama                                                                      = 'bi';
    case Bokmal_Norwegian_Norwegian_Bokmal                                            = 'nb';
    case Bosnian                                                                      = 'bs';
    case Breton                                                                       = 'br';
    case Bulgarian                                                                    = 'bg';
    case Burmese                                                                      = 'my';
    case Catalan_Valencian                                                            = 'ca';
    case Central_Khmer                                                                = 'km';
    case Chamorro                                                                     = 'ch';
    case Chechen                                                                      = 'ce';
    case Chichewa_Chewa_Nyanja                                                        = 'ny';
    case Chinese                                                                      = 'zh';
    case Church_Slavic_Old_Slavonic_Church_Slavonic_Old_Bulgarian_Old_Church_Slavonic = 'cu';
    case Chuvash                                                                      = 'cv';
    case Cornish                                                                      = 'kw';
    case Corsican                                                                     = 'co';
    case Cree                                                                         = 'cr';
    case Croatian                                                                     = 'hr';
    case Czech                                                                        = 'cs';
    case Danish                                                                       = 'da';
    case Divehi_Dhivehi_Maldivian                                                     = 'dv';
    case Dutch_Flemish                                                                = 'nl';
    case Dzongkha                                                                     = 'dz';
    case English                                                                      = 'en';
    case Esperanto                                                                    = 'eo';
    case Estonian                                                                     = 'et';
    case Ewe                                                                          = 'ee';
    case Faroese                                                                      = 'fo';
    case Fijian                                                                       = 'fj';
    case Finnish                                                                      = 'fi';
    case French                                                                       = 'fr';
    case Fulah                                                                        = 'ff';
    case Gaelic_Scottish_Gaelic                                                       = 'gd';
    case Galician                                                                     = 'gl';
    case Ganda                                                                        = 'lg';
    case Georgian                                                                     = 'ka';
    case German                                                                       = 'de';
    case Greek_Modern_1453                                                            = 'el';
    case Guarani                                                                      = 'gn';
    case Gujarati                                                                     = 'gu';
    case Haitian_Haitian_Creole                                                       = 'ht';
    case Hausa                                                                        = 'ha';
    case Hebrew                                                                       = 'he';
    case Herero                                                                       = 'hz';
    case Hindi                                                                        = 'hi';
    case Hiri_Motu                                                                    = 'ho';
    case Hungarian                                                                    = 'hu';
    case Icelandic                                                                    = 'is';
    case Ido                                                                          = 'io';
    case Igbo                                                                         = 'ig';
    case Indonesian                                                                   = 'id';
    case Interlingua_International_Auxiliary_Language_Association                     = 'ia';
    case Interlingue_Occidental                                                       = 'ie';
    case Inuktitut                                                                    = 'iu';
    case Inupiaq                                                                      = 'ik';
    case Irish                                                                        = 'ga';
    case Italian                                                                      = 'it';
    case Japanese                                                                     = 'ja';
    case Javanese                                                                     = 'jv';
    case Kalaallisut_Greenlandic                                                      = 'kl';
    case Kannada                                                                      = 'kn';
    case Kanuri                                                                       = 'kr';
    case Kashmiri                                                                     = 'ks';
    case Kazakh                                                                       = 'kk';
    case Kikuyu_Gikuyu                                                                = 'ki';
    case Kinyarwanda                                                                  = 'rw';
    case Kirghiz_Kyrgyz                                                               = 'ky';
    case Komi                                                                         = 'kv';
    case Kongo                                                                        = 'kg';
    case Korean                                                                       = 'ko';
    case Kuanyama_Kwanyama                                                            = 'kj';
    case Kurdish                                                                      = 'ku';
    case Lao                                                                          = 'lo';
    case Latin                                                                        = 'la';
    case Latvian                                                                      = 'lv';
    case Limburgan_Limburger_Limburgish                                               = 'li';
    case Lingala                                                                      = 'ln';
    case Lithuanian                                                                   = 'lt';
    case Luba_Katanga                                                                 = 'lu';
    case Luxembourgish_Letzeburgesch                                                  = 'lb';
    case Macedonian                                                                   = 'mk';
    case Malagasy                                                                     = 'mg';
    case Malay                                                                        = 'ms';
    case Malayalam                                                                    = 'ml';
    case Maltese                                                                      = 'mt';
    case Manx                                                                         = 'gv';
    case Maori                                                                        = 'mi';
    case Marathi                                                                      = 'mr';
    case Marshallese                                                                  = 'mh';
    case Mongolian                                                                    = 'mn';
    case Nauru                                                                        = 'na';
    case Navajo_Navaho                                                                = 'nv';
    case Ndebele_North_North_Ndebele                                                  = 'nd';
    case Ndebele_South_South_Ndebele                                                  = 'nr';
    case Ndonga                                                                       = 'ng';
    case Nepali                                                                       = 'ne';
    case Northern_Sami                                                                = 'se';
    case Norwegian                                                                    = 'no';
    case Norwegian_Nynorsk_Nynorsk_Norwegian                                          = 'nn';
    case Occitan_post_1500                                                            = 'oc';
    case Ojibwa                                                                       = 'oj';
    case Oriya                                                                        = 'or';
    case Oromo                                                                        = 'om';
    case Ossetian_Ossetic                                                             = 'os';
    case Pali                                                                         = 'pi';
    case Panjabi_Punjabi                                                              = 'pa';
    case Persian                                                                      = 'fa';
    case Polish                                                                       = 'pl';
    case Portuguese                                                                   = 'pt';
    case Pushto_Pashto                                                                = 'ps';
    case Romanian_Moldavian_Moldovan                                                  = 'ro';
    case Romansh                                                                      = 'rm';
    case Rundi                                                                        = 'rn';
    case Russian                                                                      = 'ru';
    case Samoan                                                                       = 'sm';
    case Sango                                                                        = 'sg';
    case Sanskrit                                                                     = 'sa';
    case Sardinian                                                                    = 'sc';
    case Serbian                                                                      = 'sr';
    case Shona                                                                        = 'sn';
    case Sichuan_Yi_Nuosu                                                             = 'ii';
    case Sindhi                                                                       = 'sd';
    case Sinhala_Sinhalese                                                            = 'si';
    case Slovak                                                                       = 'sk';
    case Slovenian                                                                    = 'sl';
    case Somali                                                                       = 'so';
    case Sotho_Southern                                                               = 'st';
    case Spanish_Castilian                                                            = 'es';
    case Sundanese                                                                    = 'su';
    case Swahili                                                                      = 'sw';
    case Swati                                                                        = 'ss';
    case Swedish                                                                      = 'sv';
    case Tagalog                                                                      = 'tl';
    case Tahitian                                                                     = 'ty';
    case Tajik                                                                        = 'tg';
    case Tamil                                                                        = 'ta';
    case Tatar                                                                        = 'tt';
    case Telugu                                                                       = 'te';
    case Thai                                                                         = 'th';
    case Tibetan                                                                      = 'bo';
    case Tigrinya                                                                     = 'ti';
    case Tonga_Tonga_Islands                                                          = 'to';
    case Tsonga                                                                       = 'ts';
    case Tswana                                                                       = 'tn';
    case Turkish                                                                      = 'tr';
    case Turkmen                                                                      = 'tk';
    case Twi                                                                          = 'tw';
    case Uighur_Uyghur                                                                = 'ug';
    case Ukrainian                                                                    = 'uk';
    case Urdu                                                                         = 'ur';
    case Uzbek                                                                        = 'uz';
    case Venda                                                                        = 've';
    case Vietnamese                                                                   = 'vi';
    case Volapuk                                                                      = 'vo';
    case Walloon                                                                      = 'wa';
    case Welsh                                                                        = 'cy';
    case Western_Frisian                                                              = 'fy';
    case Wolof                                                                        = 'wo';
    case Xhosa                                                                        = 'xh';
    case Yiddish                                                                      = 'yi';
    case Yoruba                                                                       = 'yo';
    case Zhuang_Chuang                                                                = 'za';
    case Zulu                                                                         = 'zu';

    public function toLanguage(): Language
    {
        return Enum::fromKey(Language::class, $this->name) ?? throw new RuntimeException('Every item in ISO_639_1 should have a valid language reference in Language class');
    }

    public function toISO639_2_Bibliographic(): ISO639_2_Common|ISO639_2_Bibliographic|null
    {
        return $this->toLanguage()->toISO639_2_Bibliographic();
    }

    public function toISO639_2_Terminology(): ISO639_2_Common|ISO639_2_Terminology|null
    {
        return $this->toLanguage()->toISO639_2_Terminology();
    }
}
