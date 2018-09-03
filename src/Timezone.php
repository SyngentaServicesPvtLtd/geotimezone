<?php

/**
 * @file
 * Contains \Drupal\geotimezone\Timezone.
 */

namespace Drupal\geotimezone;

/**
 * Holds the list of timezone names and offset.
 *
 * @package Drupal\geotimezone
 */
final class Timezone {
  /**
   * List of timezone names and offset.
   *
   * @var array $list
   */
  private static $list;

  /**
   * Timezone list index.
   *
   * @var int $index
   */
  private $index;

  /**
   * Timezone constructor.
   *
   * @param int $index
   *   Timezone list index.
   */
  public function __construct($index = 0) {
    $this->index = $index;
    static::$list = $this->loadList();
  }

  /**
   * Get the timezone name.
   *
   * @return string
   *   Timezone name.
   */
  public function getName() {
    return static::$list[$this->index]['name'];
  }

  /**
   * Get the timezone offset.
   *
   * @return string
   *   Timezone offset.
   */
  public function getOffset() {
    return static::$list[$this->index]['offset'];
  }

  /**
   * Loads the list of timezone names and offset.
   *
   * @return array
   *   List of timezone names and offset.
   */
  private function loadList() {
    return [
      0 => [
        'name' => '',
        'offset' => '',
      ],
      1 => [
        'name' => 'America/Dominica',
        'offset' => '-04:00',
      ],
      2 => [
        'name' => 'America/St_Vincent',
        'offset' => '-04:00',
      ],
      3 => [
        'name' => 'Australia/Lord_Howe',
        'offset' => '+10:30',
      ],
      4 => [
        'name' => 'Asia/Kashgar',
        'offset' => '+06:00',
      ],
      5 => [
        'name' => 'Pacific/Wallis',
        'offset' => '+12:00',
      ],
      6 => [
        'name' => 'Europe/Berlin',
        'offset' => '+02:00',
      ],
      7 => [
        'name' => 'America/Manaus',
        'offset' => '-04:00',
      ],
      8 => [
        'name' => 'Asia/Jerusalem',
        'offset' => '+03:00',
      ],
      9 => [
        'name' => 'America/Phoenix',
        'offset' => '-07:00',
      ],
      10 => [
        'name' => 'Australia/Darwin',
        'offset' => '+09:30',
      ],
      11 => [
        'name' => 'Asia/Seoul',
        'offset' => '+09:00',
      ],
      12 => [
        'name' => 'Africa/Gaborone',
        'offset' => '+02:00',
      ],
      13 => [
        'name' => 'Indian/Chagos',
        'offset' => '+06:00',
      ],
      14 => [
        'name' => 'America/Argentina/Mendoza',
        'offset' => '-03:00',
      ],
      15 => [
        'name' => 'Asia/Hong_Kong',
        'offset' => '+08:00',
      ],
      16 => [
        'name' => 'America/Godthab',
        'offset' => '-02:00',
      ],
      17 => [
        'name' => 'Africa/Dar_es_Salaam',
        'offset' => '+03:00',
      ],
      18 => [
        'name' => 'Pacific/Majuro',
        'offset' => '+12:00',
      ],
      19 => [
        'name' => 'America/Port-au-Prince',
        'offset' => '-04:00',
      ],
      20 => [
        'name' => 'America/Montreal',
        'offset' => '-04:00',
      ],
      21 => [
        'name' => 'Atlantic/Reykjavik',
        'offset' => '+00:00',
      ],
      22 => [
        'name' => 'America/Panama',
        'offset' => '-05:00',
      ],
      23 => [
        'name' => 'America/Sitka',
        'offset' => '-08:00',
      ],
      24 => [
        'name' => 'Asia/Ho_Chi_Minh',
        'offset' => '+07:00',
      ],
      25 => [
        'name' => 'America/Danmarkshavn',
        'offset' => '+00:00',
      ],
      26 => [
        'name' => 'Asia/Jakarta',
        'offset' => '+07:00',
      ],
      27 => [
        'name' => 'America/Boise',
        'offset' => '-06:00',
      ],
      28 => [
        'name' => 'Asia/Baghdad',
        'offset' => '+03:00',
      ],
      29 => [
        'name' => 'Africa/El_Aaiun',
        'offset' => '+01:00',
      ],
      30 => [
        'name' => 'Europe/Zagreb',
        'offset' => '+02:00',
      ],
      31 => [
        'name' => 'America/Santiago',
        'offset' => '-03:00',
      ],
      32 => [
        'name' => 'America/Merida',
        'offset' => '-05:00',
      ],
      33 => [
        'name' => 'Africa/Nouakchott',
        'offset' => '+00:00',
      ],
      34 => [
        'name' => 'America/Bahia_Banderas',
        'offset' => '-05:00',
      ],
      35 => [
        'name' => 'Australia/Perth',
        'offset' => '+08:00',
      ],
      36 => [
        'name' => 'Asia/Sakhalin',
        'offset' => '+11:00',
      ],
      37 => [
        'name' => 'Asia/Vladivostok',
        'offset' => '+10:00',
      ],
      38 => [
        'name' => 'Africa/Bissau',
        'offset' => '+00:00',
      ],
      39 => [
        'name' => 'America/Los_Angeles',
        'offset' => '-07:00',
      ],
      40 => [
        'name' => 'Asia/Rangoon',
        'offset' => '+06:30',
      ],
      41 => [
        'name' => 'America/Belize',
        'offset' => '-06:00',
      ],
      42 => [
        'name' => 'Asia/Harbin',
        'offset' => '+08:00',
      ],
      43 => [
        'name' => 'Australia/Currie',
        'offset' => '+10:00',
      ],
      44 => [
        'name' => 'Pacific/Pago_Pago',
        'offset' => '-11:00',
      ],
      45 => [
        'name' => 'America/Vancouver',
        'offset' => '-07:00',
      ],
      46 => [
        'name' => 'Asia/Magadan',
        'offset' => '+11:00',
      ],
      47 => [
        'name' => 'Asia/Tbilisi',
        'offset' => '+04:00',
      ],
      48 => [
        'name' => 'Asia/Yerevan',
        'offset' => '+04:00',
      ],
      49 => [
        'name' => 'Europe/Tallinn',
        'offset' => '+03:00',
      ],
      50 => [
        'name' => 'Pacific/Johnston',
        'offset' => '-10:00',
      ],
      51 => [
        'name' => 'Asia/Baku',
        'offset' => '+04:00',
      ],
      52 => [
        'name' => 'America/North_Dakota/New_Salem',
        'offset' => '-05:00',
      ],
      53 => [
        'name' => 'Europe/Vilnius',
        'offset' => '+03:00',
      ],
      54 => [
        'name' => 'America/Indiana/Petersburg',
        'offset' => '-04:00',
      ],
      55 => [
        'name' => 'Asia/Tehran',
        'offset' => '+04:30',
      ],
      56 => [
        'name' => 'America/Inuvik',
        'offset' => '-06:00',
      ],
      57 => [
        'name' => 'Europe/Lisbon',
        'offset' => '+01:00',
      ],
      58 => [
        'name' => 'Europe/Vatican',
        'offset' => '+02:00',
      ],
      59 => [
        'name' => 'Pacific/Chatham',
        'offset' => '+12:45',
      ],
      60 => [
        'name' => 'Antarctica/Macquarie',
        'offset' => '+11:00',
      ],
      61 => [
        'name' => 'America/Araguaina',
        'offset' => '-03:00',
      ],
      62 => [
        'name' => 'Asia/Thimphu',
        'offset' => '+06:00',
      ],
      63 => [
        'name' => 'Atlantic/Madeira',
        'offset' => '+01:00',
      ],
      64 => [
        'name' => 'America/Coral_Harbour',
        'offset' => '-05:00',
      ],
      65 => [
        'name' => 'Pacific/Funafuti',
        'offset' => '+12:00',
      ],
      66 => [
        'name' => 'Indian/Mahe',
        'offset' => '+04:00',
      ],
      67 => [
        'name' => 'Australia/Adelaide',
        'offset' => '+09:30',
      ],
      68 => [
        'name' => 'Africa/Freetown',
        'offset' => '+00:00',
      ],
      69 => [
        'name' => 'Atlantic/South_Georgia',
        'offset' => '-02:00',
      ],
      70 => [
        'name' => 'Africa/Accra',
        'offset' => '+00:00',
      ],
      71 => [
        'name' => 'America/North_Dakota/Beulah',
        'offset' => '-05:00',
      ],
      72 => [
        'name' => 'America/Jamaica',
        'offset' => '-05:00',
      ],
      73 => [
        'name' => 'America/Scoresbysund',
        'offset' => '+00:00',
      ],
      74 => [
        'name' => 'America/Swift_Current',
        'offset' => '-06:00',
      ],
      75 => [
        'name' => 'Europe/Tirane',
        'offset' => '+02:00',
      ],
      76 => [
        'name' => 'Asia/Ashgabat',
        'offset' => '+05:00',
      ],
      77 => [
        'name' => 'America/Moncton',
        'offset' => '-03:00',
      ],
      78 => [
        'name' => 'Europe/Vaduz',
        'offset' => '+02:00',
      ],
      79 => [
        'name' => 'Australia/Eucla',
        'offset' => '+08:45',
      ],
      80 => [
        'name' => 'America/Montserrat',
        'offset' => '-04:00',
      ],
      81 => [
        'name' => 'America/Glace_Bay',
        'offset' => '-03:00',
      ],
      82 => [
        'name' => 'Atlantic/Stanley',
        'offset' => '-03:00',
      ],
      83 => [
        'name' => 'Africa/Bujumbura',
        'offset' => '+02:00',
      ],
      84 => [
        'name' => 'Africa/Porto-Novo',
        'offset' => '+01:00',
      ],
      85 => [
        'name' => 'America/Argentina/Rio_Gallegos',
        'offset' => '-03:00',
      ],
      86 => [
        'name' => 'America/Grenada',
        'offset' => '-04:00',
      ],
      87 => [
        'name' => 'Asia/Novokuznetsk',
        'offset' => '+07:00',
      ],
      88 => [
        'name' => 'America/Argentina/Catamarca',
        'offset' => '-03:00',
      ],
      89 => [
        'name' => 'America/Indiana/Indianapolis',
        'offset' => '-04:00',
      ],
      90 => [
        'name' => 'America/Indiana/Tell_City',
        'offset' => '-05:00',
      ],
      91 => [
        'name' => 'America/Curacao',
        'offset' => '-04:00',
      ],
      92 => [
        'name' => 'America/Miquelon',
        'offset' => '-02:00',
      ],
      93 => [
        'name' => 'America/Detroit',
        'offset' => '-04:00',
      ],
      94 => [
        'name' => 'America/Menominee',
        'offset' => '-05:00',
      ],
      95 => [
        'name' => 'Asia/Novosibirsk',
        'offset' => '+07:00',
      ],
      96 => [
        'name' => 'Africa/Lagos',
        'offset' => '+01:00',
      ],
      97 => [
        'name' => 'Indian/Cocos',
        'offset' => '+06:30',
      ],
      98 => [
        'name' => 'America/Yakutat',
        'offset' => '-08:00',
      ],
      99 => [
        'name' => 'Europe/Volgograd',
        'offset' => '+03:00',
      ],
      100 => [
        'name' => 'Asia/Qatar',
        'offset' => '+03:00',
      ],
      101 => [
        'name' => 'Indian/Antananarivo',
        'offset' => '+03:00',
      ],
      102 => [
        'name' => 'Pacific/Marquesas',
        'offset' => '-09:30',
      ],
      103 => [
        'name' => 'America/Grand_Turk',
        'offset' => '-04:00',
      ],
      104 => [
        'name' => 'Asia/Khandyga',
        'offset' => '+09:00',
      ],
      105 => [
        'name' => 'America/North_Dakota/Center',
        'offset' => '-05:00',
      ],
      106 => [
        'name' => 'Pacific/Guam',
        'offset' => '+10:00',
      ],
      107 => [
        'name' => 'Pacific/Pitcairn',
        'offset' => '-08:00',
      ],
      108 => [
        'name' => 'America/Cambridge_Bay',
        'offset' => '-06:00',
      ],
      109 => [
        'name' => 'Asia/Bahrain',
        'offset' => '+03:00',
      ],
      110 => [
        'name' => 'America/Kentucky/Monticello',
        'offset' => '-04:00',
      ],
      111 => [
        'name' => 'Arctic/Longyearbyen',
        'offset' => '+02:00',
      ],
      112 => [
        'name' => 'Africa/Cairo',
        'offset' => '+02:00',
      ],
      113 => [
        'name' => 'Australia/Hobart',
        'offset' => '+10:00',
      ],
      114 => [
        'name' => 'Pacific/Galapagos',
        'offset' => '-06:00',
      ],
      115 => [
        'name' => 'Asia/Oral',
        'offset' => '+05:00',
      ],
      116 => [
        'name' => 'America/Dawson_Creek',
        'offset' => '-07:00',
      ],
      117 => [
        'name' => 'Africa/Mbabane',
        'offset' => '+02:00',
      ],
      118 => [
        'name' => 'America/Halifax',
        'offset' => '-03:00',
      ],
      119 => [
        'name' => 'Pacific/Tongatapu',
        'offset' => '+13:00',
      ],
      120 => [
        'name' => 'Asia/Aqtau',
        'offset' => '+05:00',
      ],
      121 => [
        'name' => 'Asia/Hovd',
        'offset' => '+07:00',
      ],
      122 => [
        'name' => 'Africa/Nairobi',
        'offset' => '+03:00',
      ],
      123 => [
        'name' => 'Asia/Ulaanbaatar',
        'offset' => '+08:00',
      ],
      124 => [
        'name' => 'Indian/Christmas',
        'offset' => '+07:00',
      ],
      125 => [
        'name' => 'Asia/Taipei',
        'offset' => '+08:00',
      ],
      126 => [
        'name' => 'Australia/Melbourne',
        'offset' => '+10:00',
      ],
      127 => [
        'name' => 'America/Argentina/Salta',
        'offset' => '-03:00',
      ],
      128 => [
        'name' => 'Australia/Broken_Hill',
        'offset' => '+09:30',
      ],
      129 => [
        'name' => 'America/Argentina/Tucuman',
        'offset' => '-03:00',
      ],
      130 => [
        'name' => 'America/Kentucky/Louisville',
        'offset' => '-04:00',
      ],
      131 => [
        'name' => 'Asia/Jayapura',
        'offset' => '+09:00',
      ],
      132 => [
        'name' => 'Asia/Macau',
        'offset' => '+08:00',
      ],
      133 => [
        'name' => 'America/Ojinaga',
        'offset' => '-06:00',
      ],
      134 => [
        'name' => 'America/Nome',
        'offset' => '-08:00',
      ],
      135 => [
        'name' => 'Pacific/Wake',
        'offset' => '+12:00',
      ],
      136 => [
        'name' => 'Europe/Andorra',
        'offset' => '+02:00',
      ],
      137 => [
        'name' => 'America/Iqaluit',
        'offset' => '-04:00',
      ],
      138 => [
        'name' => 'America/Kralendijk',
        'offset' => '-04:00',
      ],
      139 => [
        'name' => 'Europe/Jersey',
        'offset' => '+01:00',
      ],
      140 => [
        'name' => 'Asia/Ust-Nera',
        'offset' => '+10:00',
      ],
      141 => [
        'name' => 'Asia/Yakutsk',
        'offset' => '+09:00',
      ],
      142 => [
        'name' => 'America/Yellowknife',
        'offset' => '-06:00',
      ],
      143 => [
        'name' => 'America/Fortaleza',
        'offset' => '-03:00',
      ],
      144 => [
        'name' => 'Asia/Irkutsk',
        'offset' => '+08:00',
      ],
      145 => [
        'name' => 'America/Tegucigalpa',
        'offset' => '-06:00',
      ],
      146 => [
        'name' => 'Europe/Zaporozhye',
        'offset' => '+03:00',
      ],
      147 => [
        'name' => 'Pacific/Fiji',
        'offset' => '+12:00',
      ],
      148 => [
        'name' => 'Pacific/Tarawa',
        'offset' => '+12:00',
      ],
      149 => [
        'name' => 'Africa/Asmara',
        'offset' => '+03:00',
      ],
      150 => [
        'name' => 'Asia/Dhaka',
        'offset' => '+06:00',
      ],
      151 => [
        'name' => 'Asia/Pyongyang',
        'offset' => '+08:30',
      ],
      152 => [
        'name' => 'Europe/Athens',
        'offset' => '+03:00',
      ],
      153 => [
        'name' => 'America/Resolute',
        'offset' => '-05:00',
      ],
      154 => [
        'name' => 'Africa/Brazzaville',
        'offset' => '+01:00',
      ],
      155 => [
        'name' => 'Africa/Libreville',
        'offset' => '+01:00',
      ],
      156 => [
        'name' => 'Atlantic/St_Helena',
        'offset' => '+00:00',
      ],
      157 => [
        'name' => 'Europe/Samara',
        'offset' => '+04:00',
      ],
      158 => [
        'name' => 'America/Adak',
        'offset' => '-09:00',
      ],
      159 => [
        'name' => 'America/Argentina/Jujuy',
        'offset' => '-03:00',
      ],
      160 => [
        'name' => 'America/Chicago',
        'offset' => '-05:00',
      ],
      161 => [
        'name' => 'Africa/Sao_Tome',
        'offset' => '+00:00',
      ],
      162 => [
        'name' => 'Europe/Bratislava',
        'offset' => '+02:00',
      ],
      163 => [
        'name' => 'Asia/Riyadh',
        'offset' => '+03:00',
      ],
      164 => [
        'name' => 'America/Lima',
        'offset' => '-05:00',
      ],
      165 => [
        'name' => 'America/New_York',
        'offset' => '-04:00',
      ],
      166 => [
        'name' => 'America/Pangnirtung',
        'offset' => '-04:00',
      ],
      167 => [
        'name' => 'Asia/Samarkand',
        'offset' => '+05:00',
      ],
      168 => [
        'name' => 'America/Port_of_Spain',
        'offset' => '-04:00',
      ],
      169 => [
        'name' => 'Africa/Johannesburg',
        'offset' => '+02:00',
      ],
      170 => [
        'name' => 'Pacific/Port_Moresby',
        'offset' => '+10:00',
      ],
      171 => [
        'name' => 'America/Bahia',
        'offset' => '-03:00',
      ],
      172 => [
        'name' => 'Europe/Zurich',
        'offset' => '+02:00',
      ],
      173 => [
        'name' => 'America/St_Barthelemy',
        'offset' => '-04:00',
      ],
      174 => [
        'name' => 'Asia/Nicosia',
        'offset' => '+03:00',
      ],
      175 => [
        'name' => 'Europe/Kaliningrad',
        'offset' => '+02:00',
      ],
      176 => [
        'name' => 'America/Anguilla',
        'offset' => '-04:00',
      ],
      177 => [
        'name' => 'Europe/Ljubljana',
        'offset' => '+02:00',
      ],
      178 => [
        'name' => 'Asia/Yekaterinburg',
        'offset' => '+05:00',
      ],
      179 => [
        'name' => 'Africa/Kampala',
        'offset' => '+03:00',
      ],
      180 => [
        'name' => 'America/Rio_Branco',
        'offset' => '-05:00',
      ],
      181 => [
        'name' => 'Africa/Bamako',
        'offset' => '+00:00',
      ],
      182 => [
        'name' => 'America/Goose_Bay',
        'offset' => '-03:00',
      ],
      183 => [
        'name' => 'Europe/Moscow',
        'offset' => '+03:00',
      ],
      184 => [
        'name' => 'Africa/Conakry',
        'offset' => '+00:00',
      ],
      185 => [
        'name' => 'America/Chihuahua',
        'offset' => '-06:00',
      ],
      186 => [
        'name' => 'Europe/Warsaw',
        'offset' => '+02:00',
      ],
      187 => [
        'name' => 'Pacific/Palau',
        'offset' => '+09:00',
      ],
      188 => [
        'name' => 'Europe/Mariehamn',
        'offset' => '+03:00',
      ],
      189 => [
        'name' => 'Africa/Windhoek',
        'offset' => '+02:00',
      ],
      190 => [
        'name' => 'America/La_Paz',
        'offset' => '-04:00',
      ],
      191 => [
        'name' => 'America/Recife',
        'offset' => '-03:00',
      ],
      192 => [
        'name' => 'America/Mexico_City',
        'offset' => '-05:00',
      ],
      193 => [
        'name' => 'Asia/Amman',
        'offset' => '+03:00',
      ],
      194 => [
        'name' => 'America/Tijuana',
        'offset' => '-07:00',
      ],
      195 => [
        'name' => 'America/Metlakatla',
        'offset' => '-08:00',
      ],
      196 => [
        'name' => 'Pacific/Midway',
        'offset' => '-11:00',
      ],
      197 => [
        'name' => 'Europe/Simferopol',
        'offset' => '+03:00',
      ],
      198 => [
        'name' => 'Europe/Budapest',
        'offset' => '+02:00',
      ],
      199 => [
        'name' => 'Pacific/Apia',
        'offset' => '+13:00',
      ],
      200 => [
        'name' => 'America/Paramaribo',
        'offset' => '-03:00',
      ],
      201 => [
        'name' => 'Africa/Malabo',
        'offset' => '+01:00',
      ],
      202 => [
        'name' => 'Africa/Ndjamena',
        'offset' => '+01:00',
      ],
      203 => [
        'name' => 'Asia/Choibalsan',
        'offset' => '+08:00',
      ],
      204 => [
        'name' => 'America/Antigua',
        'offset' => '-04:00',
      ],
      205 => [
        'name' => 'Europe/Istanbul',
        'offset' => '+03:00',
      ],
      206 => [
        'name' => 'Africa/Blantyre',
        'offset' => '+02:00',
      ],
      207 => [
        'name' => 'Australia/Sydney',
        'offset' => '+10:00',
      ],
      208 => [
        'name' => 'Asia/Dushanbe',
        'offset' => '+05:00',
      ],
      209 => [
        'name' => 'Europe/Belgrade',
        'offset' => '+02:00',
      ],
      210 => [
        'name' => 'Asia/Karachi',
        'offset' => '+05:00',
      ],
      211 => [
        'name' => 'Europe/Luxembourg',
        'offset' => '+02:00',
      ],
      212 => [
        'name' => 'Europe/Podgorica',
        'offset' => '+02:00',
      ],
      213 => [
        'name' => 'Australia/Lindeman',
        'offset' => '+10:00',
      ],
      214 => [
        'name' => 'Africa/Bangui',
        'offset' => '+01:00',
      ],
      215 => [
        'name' => 'Asia/Aden',
        'offset' => '+03:00',
      ],
      216 => [
        'name' => 'Pacific/Chuuk',
        'offset' => '+10:00',
      ],
      217 => [
        'name' => 'Asia/Brunei',
        'offset' => '+08:00',
      ],
      218 => [
        'name' => 'Indian/Comoro',
        'offset' => '+03:00',
      ],
      219 => [
        'name' => 'America/Asuncion',
        'offset' => '-04:00',
      ],
      220 => [
        'name' => 'Europe/Prague',
        'offset' => '+02:00',
      ],
      221 => [
        'name' => 'America/Cayman',
        'offset' => '-05:00',
      ],
      222 => [
        'name' => 'Pacific/Pohnpei',
        'offset' => '+11:00',
      ],
      223 => [
        'name' => 'America/Atikokan',
        'offset' => '-05:00',
      ],
      224 => [
        'name' => 'Pacific/Norfolk',
        'offset' => '+11:00',
      ],
      225 => [
        'name' => 'Africa/Dakar',
        'offset' => '+00:00',
      ],
      226 => [
        'name' => 'America/Argentina/Buenos_Aires',
        'offset' => '-03:00',
      ],
      227 => [
        'name' => 'America/Edmonton',
        'offset' => '-06:00',
      ],
      228 => [
        'name' => 'America/Barbados',
        'offset' => '-04:00',
      ],
      229 => [
        'name' => 'America/Santo_Domingo',
        'offset' => '-04:00',
      ],
      230 => [
        'name' => 'Asia/Bishkek',
        'offset' => '+06:00',
      ],
      231 => [
        'name' => 'Asia/Kuwait',
        'offset' => '+03:00',
      ],
      232 => [
        'name' => 'Pacific/Efate',
        'offset' => '+11:00',
      ],
      233 => [
        'name' => 'Indian/Mauritius',
        'offset' => '+04:00',
      ],
      234 => [
        'name' => 'America/Aruba',
        'offset' => '-04:00',
      ],
      235 => [
        'name' => 'Australia/Brisbane',
        'offset' => '+10:00',
      ],
      236 => [
        'name' => 'Indian/Kerguelen',
        'offset' => '+05:00',
      ],
      237 => [
        'name' => 'Pacific/Kiritimati',
        'offset' => '+14:00',
      ],
      238 => [
        'name' => 'America/Toronto',
        'offset' => '-04:00',
      ],
      239 => [
        'name' => 'Asia/Qyzylorda',
        'offset' => '+06:00',
      ],
      240 => [
        'name' => 'Asia/Aqtobe',
        'offset' => '+05:00',
      ],
      241 => [
        'name' => 'America/Eirunepe',
        'offset' => '-05:00',
      ],
      242 => [
        'name' => 'Europe/Isle_of_Man',
        'offset' => '+01:00',
      ],
      243 => [
        'name' => 'America/Blanc-Sablon',
        'offset' => '-04:00',
      ],
      244 => [
        'name' => 'Pacific/Honolulu',
        'offset' => '-10:00',
      ],
      245 => [
        'name' => 'America/Montevideo',
        'offset' => '-03:00',
      ],
      246 => [
        'name' => 'Asia/Tashkent',
        'offset' => '+05:00',
      ],
      247 => [
        'name' => 'Pacific/Kosrae',
        'offset' => '+11:00',
      ],
      248 => [
        'name' => 'America/Indiana/Winamac',
        'offset' => '-04:00',
      ],
      249 => [
        'name' => 'America/Argentina/La_Rioja',
        'offset' => '-03:00',
      ],
      250 => [
        'name' => 'Africa/Mogadishu',
        'offset' => '+03:00',
      ],
      251 => [
        'name' => 'Asia/Phnom_Penh',
        'offset' => '+07:00',
      ],
      252 => [
        'name' => 'Africa/Banjul',
        'offset' => '+00:00',
      ],
      253 => [
        'name' => 'America/Creston',
        'offset' => '-07:00',
      ],
      254 => [
        'name' => 'Europe/Brussels',
        'offset' => '+02:00',
      ],
      255 => [
        'name' => 'Asia/Gaza',
        'offset' => '+03:00',
      ],
      256 => [
        'name' => 'Atlantic/Bermuda',
        'offset' => '-03:00',
      ],
      257 => [
        'name' => 'America/Indiana/Knox',
        'offset' => '-05:00',
      ],
      258 => [
        'name' => 'America/El_Salvador',
        'offset' => '-06:00',
      ],
      259 => [
        'name' => 'America/Managua',
        'offset' => '-06:00',
      ],
      260 => [
        'name' => 'Africa/Niamey',
        'offset' => '+01:00',
      ],
      261 => [
        'name' => 'Europe/Monaco',
        'offset' => '+02:00',
      ],
      262 => [
        'name' => 'Africa/Ouagadougou',
        'offset' => '+00:00',
      ],
      263 => [
        'name' => 'Pacific/Easter',
        'offset' => '-05:00',
      ],
      264 => [
        'name' => 'Atlantic/Canary',
        'offset' => '+01:00',
      ],
      265 => [
        'name' => 'Asia/Vientiane',
        'offset' => '+07:00',
      ],
      266 => [
        'name' => 'Europe/Bucharest',
        'offset' => '+03:00',
      ],
      267 => [
        'name' => 'Africa/Lusaka',
        'offset' => '+02:00',
      ],
      268 => [
        'name' => 'Asia/Kathmandu',
        'offset' => '+05:45',
      ],
      269 => [
        'name' => 'Africa/Harare',
        'offset' => '+02:00',
      ],
      270 => [
        'name' => 'Asia/Bangkok',
        'offset' => '+07:00',
      ],
      271 => [
        'name' => 'Europe/Rome',
        'offset' => '+02:00',
      ],
      272 => [
        'name' => 'Africa/Lome',
        'offset' => '+00:00',
      ],
      273 => [
        'name' => 'America/Denver',
        'offset' => '-06:00',
      ],
      274 => [
        'name' => 'Indian/Reunion',
        'offset' => '+04:00',
      ],
      275 => [
        'name' => 'Europe/Kiev',
        'offset' => '+03:00',
      ],
      276 => [
        'name' => 'Europe/Vienna',
        'offset' => '+02:00',
      ],
      277 => [
        'name' => 'America/Guadeloupe',
        'offset' => '-04:00',
      ],
      278 => [
        'name' => 'America/Argentina/Cordoba',
        'offset' => '-03:00',
      ],
      279 => [
        'name' => 'Asia/Manila',
        'offset' => '+08:00',
      ],
      280 => [
        'name' => 'Asia/Tokyo',
        'offset' => '+09:00',
      ],
      281 => [
        'name' => 'America/Nassau',
        'offset' => '-04:00',
      ],
      282 => [
        'name' => 'Pacific/Enderbury',
        'offset' => '+13:00',
      ],
      283 => [
        'name' => 'Atlantic/Azores',
        'offset' => '+00:00',
      ],
      284 => [
        'name' => 'America/Winnipeg',
        'offset' => '-05:00',
      ],
      285 => [
        'name' => 'Europe/Dublin',
        'offset' => '+01:00',
      ],
      286 => [
        'name' => 'Asia/Kuching',
        'offset' => '+08:00',
      ],
      287 => [
        'name' => 'America/Argentina/Ushuaia',
        'offset' => '-03:00',
      ],
      288 => [
        'name' => 'Asia/Colombo',
        'offset' => '+05:30',
      ],
      289 => [
        'name' => 'Asia/Krasnoyarsk',
        'offset' => '+07:00',
      ],
      290 => [
        'name' => 'America/St_Johns',
        'offset' => '-02:30',
      ],
      291 => [
        'name' => 'Asia/Shanghai',
        'offset' => '+08:00',
      ],
      292 => [
        'name' => 'Pacific/Kwajalein',
        'offset' => '+12:00',
      ],
      293 => [
        'name' => 'Africa/Kigali',
        'offset' => '+02:00',
      ],
      294 => [
        'name' => 'Europe/Chisinau',
        'offset' => '+03:00',
      ],
      295 => [
        'name' => 'America/Noronha',
        'offset' => '-02:00',
      ],
      296 => [
        'name' => 'Europe/Guernsey',
        'offset' => '+01:00',
      ],
      297 => [
        'name' => 'Europe/Paris',
        'offset' => '+02:00',
      ],
      298 => [
        'name' => 'America/Guyana',
        'offset' => '-04:00',
      ],
      299 => [
        'name' => 'Africa/Luanda',
        'offset' => '+01:00',
      ],
      300 => [
        'name' => 'Africa/Abidjan',
        'offset' => '+00:00',
      ],
      301 => [
        'name' => 'America/Tortola',
        'offset' => '-04:00',
      ],
      302 => [
        'name' => 'Europe/Malta',
        'offset' => '+02:00',
      ],
      303 => [
        'name' => 'Europe/London',
        'offset' => '+01:00',
      ],
      304 => [
        'name' => 'Pacific/Guadalcanal',
        'offset' => '+11:00',
      ],
      305 => [
        'name' => 'Pacific/Gambier',
        'offset' => '-09:00',
      ],
      306 => [
        'name' => 'America/Thule',
        'offset' => '-03:00',
      ],
      307 => [
        'name' => 'America/Rankin_Inlet',
        'offset' => '-05:00',
      ],
      308 => [
        'name' => 'America/Regina',
        'offset' => '-06:00',
      ],
      309 => [
        'name' => 'America/Indiana/Vincennes',
        'offset' => '-04:00',
      ],
      310 => [
        'name' => 'America/Santarem',
        'offset' => '-03:00',
      ],
      311 => [
        'name' => 'Africa/Djibouti',
        'offset' => '+03:00',
      ],
      312 => [
        'name' => 'Pacific/Tahiti',
        'offset' => '-10:00',
      ],
      313 => [
        'name' => 'Europe/San_Marino',
        'offset' => '+02:00',
      ],
      314 => [
        'name' => 'America/Argentina/San_Luis',
        'offset' => '-03:00',
      ],
      315 => [
        'name' => 'Africa/Ceuta',
        'offset' => '+02:00',
      ],
      316 => [
        'name' => 'Asia/Singapore',
        'offset' => '+08:00',
      ],
      317 => [
        'name' => 'America/Campo_Grande',
        'offset' => '-04:00',
      ],
      318 => [
        'name' => 'Africa/Tunis',
        'offset' => '+01:00',
      ],
      319 => [
        'name' => 'Europe/Copenhagen',
        'offset' => '+02:00',
      ],
      320 => [
        'name' => 'Asia/Pontianak',
        'offset' => '+07:00',
      ],
      321 => [
        'name' => 'Asia/Dubai',
        'offset' => '+04:00',
      ],
      322 => [
        'name' => 'Africa/Khartoum',
        'offset' => '+02:00',
      ],
      323 => [
        'name' => 'Europe/Helsinki',
        'offset' => '+03:00',
      ],
      324 => [
        'name' => 'America/Whitehorse',
        'offset' => '-07:00',
      ],
      325 => [
        'name' => 'America/Maceio',
        'offset' => '-03:00',
      ],
      326 => [
        'name' => 'Africa/Douala',
        'offset' => '+01:00',
      ],
      327 => [
        'name' => 'Asia/Kuala_Lumpur',
        'offset' => '+08:00',
      ],
      328 => [
        'name' => 'America/Martinique',
        'offset' => '-04:00',
      ],
      329 => [
        'name' => 'America/Sao_Paulo',
        'offset' => '-03:00',
      ],
      330 => [
        'name' => 'America/Dawson',
        'offset' => '-07:00',
      ],
      331 => [
        'name' => 'Africa/Kinshasa',
        'offset' => '+01:00',
      ],
      332 => [
        'name' => 'Europe/Riga',
        'offset' => '+03:00',
      ],
      333 => [
        'name' => 'Africa/Tripoli',
        'offset' => '+02:00',
      ],
      334 => [
        'name' => 'Europe/Madrid',
        'offset' => '+02:00',
      ],
      335 => [
        'name' => 'America/Nipigon',
        'offset' => '-04:00',
      ],
      336 => [
        'name' => 'Pacific/Fakaofo',
        'offset' => '+13:00',
      ],
      337 => [
        'name' => 'Europe/Skopje',
        'offset' => '+02:00',
      ],
      338 => [
        'name' => 'America/St_Thomas',
        'offset' => '-04:00',
      ],
      339 => [
        'name' => 'Africa/Maseru',
        'offset' => '+02:00',
      ],
      340 => [
        'name' => 'Europe/Sofia',
        'offset' => '+03:00',
      ],
      341 => [
        'name' => 'America/Porto_Velho',
        'offset' => '-04:00',
      ],
      342 => [
        'name' => 'America/St_Kitts',
        'offset' => '-04:00',
      ],
      343 => [
        'name' => 'Africa/Casablanca',
        'offset' => '+01:00',
      ],
      344 => [
        'name' => 'Asia/Hebron',
        'offset' => '+03:00',
      ],
      345 => [
        'name' => 'Asia/Dili',
        'offset' => '+09:00',
      ],
      346 => [
        'name' => 'America/Argentina/San_Juan',
        'offset' => '-03:00',
      ],
      347 => [
        'name' => 'Asia/Almaty',
        'offset' => '+06:00',
      ],
      348 => [
        'name' => 'Europe/Sarajevo',
        'offset' => '+02:00',
      ],
      349 => [
        'name' => 'America/Boa_Vista',
        'offset' => '-04:00',
      ],
      350 => [
        'name' => 'Africa/Addis_Ababa',
        'offset' => '+03:00',
      ],
      351 => [
        'name' => 'Indian/Mayotte',
        'offset' => '+03:00',
      ],
      352 => [
        'name' => 'Africa/Lubumbashi',
        'offset' => '+02:00',
      ],
      353 => [
        'name' => 'Atlantic/Cape_Verde',
        'offset' => '-01:00',
      ],
      354 => [
        'name' => 'America/Lower_Princes',
        'offset' => '-04:00',
      ],
      355 => [
        'name' => 'Europe/Oslo',
        'offset' => '+02:00',
      ],
      356 => [
        'name' => 'Africa/Monrovia',
        'offset' => '+00:00',
      ],
      357 => [
        'name' => 'Asia/Muscat',
        'offset' => '+04:00',
      ],
      358 => [
        'name' => 'America/Thunder_Bay',
        'offset' => '-04:00',
      ],
      359 => [
        'name' => 'America/Juneau',
        'offset' => '-08:00',
      ],
      360 => [
        'name' => 'Pacific/Rarotonga',
        'offset' => '-10:00',
      ],
      361 => [
        'name' => 'Atlantic/Faroe',
        'offset' => '+01:00',
      ],
      362 => [
        'name' => 'America/Cayenne',
        'offset' => '-03:00',
      ],
      363 => [
        'name' => 'America/Cuiaba',
        'offset' => '-04:00',
      ],
      364 => [
        'name' => 'Africa/Maputo',
        'offset' => '+02:00',
      ],
      365 => [
        'name' => 'Asia/Anadyr',
        'offset' => '+12:00',
      ],
      366 => [
        'name' => 'Asia/Kabul',
        'offset' => '+04:30',
      ],
      367 => [
        'name' => 'America/Santa_Isabel',
        'offset' => '-07:00',
      ],
      368 => [
        'name' => 'Asia/Damascus',
        'offset' => '+03:00',
      ],
      369 => [
        'name' => 'Pacific/Noumea',
        'offset' => '+11:00',
      ],
      370 => [
        'name' => 'America/Anchorage',
        'offset' => '-08:00',
      ],
      371 => [
        'name' => 'Asia/Kolkata',
        'offset' => '+05:30',
      ],
      372 => [
        'name' => 'Pacific/Niue',
        'offset' => '-11:00',
      ],
      373 => [
        'name' => 'Asia/Kamchatka',
        'offset' => '+12:00',
      ],
      374 => [
        'name' => 'America/Matamoros',
        'offset' => '-05:00',
      ],
      375 => [
        'name' => 'Europe/Stockholm',
        'offset' => '+02:00',
      ],
      376 => [
        'name' => 'America/Havana',
        'offset' => '-04:00',
      ],
      377 => [
        'name' => 'Pacific/Auckland',
        'offset' => '+12:00',
      ],
      378 => [
        'name' => 'America/Rainy_River',
        'offset' => '-05:00',
      ],
      379 => [
        'name' => 'Asia/Omsk',
        'offset' => '+06:00',
      ],
      380 => [
        'name' => 'Africa/Algiers',
        'offset' => '+01:00',
      ],
      381 => [
        'name' => 'America/Guayaquil',
        'offset' => '-05:00',
      ],
      382 => [
        'name' => 'Indian/Maldives',
        'offset' => '+05:00',
      ],
      383 => [
        'name' => 'Asia/Makassar',
        'offset' => '+08:00',
      ],
      384 => [
        'name' => 'America/Monterrey',
        'offset' => '-05:00',
      ],
      385 => [
        'name' => 'Europe/Amsterdam',
        'offset' => '+02:00',
      ],
      386 => [
        'name' => 'America/St_Lucia',
        'offset' => '-04:00',
      ],
      387 => [
        'name' => 'Europe/Uzhgorod',
        'offset' => '+03:00',
      ],
      388 => [
        'name' => 'America/Indiana/Marengo',
        'offset' => '-04:00',
      ],
      389 => [
        'name' => 'Pacific/Saipan',
        'offset' => '+10:00',
      ],
      390 => [
        'name' => 'America/Bogota',
        'offset' => '-05:00',
      ],
      391 => [
        'name' => 'America/Indiana/Vevay',
        'offset' => '-04:00',
      ],
      392 => [
        'name' => 'America/Guatemala',
        'offset' => '-06:00',
      ],
      393 => [
        'name' => 'America/Puerto_Rico',
        'offset' => '-04:00',
      ],
      394 => [
        'name' => 'America/Marigot',
        'offset' => '-04:00',
      ],
      395 => [
        'name' => 'Africa/Juba',
        'offset' => '+03:00',
      ],
      396 => [
        'name' => 'America/Costa_Rica',
        'offset' => '-06:00',
      ],
      397 => [
        'name' => 'America/Caracas',
        'offset' => '-04:00',
      ],
      398 => [
        'name' => 'Pacific/Nauru',
        'offset' => '+12:00',
      ],
      399 => [
        'name' => 'Europe/Minsk',
        'offset' => '+03:00',
      ],
      400 => [
        'name' => 'America/Belem',
        'offset' => '-03:00',
      ],
      401 => [
        'name' => 'America/Cancun',
        'offset' => '-05:00',
      ],
      402 => [
        'name' => 'America/Hermosillo',
        'offset' => '-07:00',
      ],
      403 => [
        'name' => 'Asia/Chongqing',
        'offset' => '+08:00',
      ],
      404 => [
        'name' => 'Asia/Beirut',
        'offset' => '+03:00',
      ],
      405 => [
        'name' => 'Europe/Gibraltar',
        'offset' => '+02:00',
      ],
      406 => [
        'name' => 'Asia/Urumqi',
        'offset' => '+06:00',
      ],
      407 => [
        'name' => 'America/Mazatlan',
        'offset' => '-06:00',
      ],
    ];
  }
}
