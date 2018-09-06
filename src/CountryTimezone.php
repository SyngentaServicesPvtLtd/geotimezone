<?php

/**
 * @file
 * Contains \Drupal\geotimezone\CountryTimezone.
 */

namespace Drupal\geotimezone;

/**
 * Holds the list of time zone based on country code.
 *
 * @package Drupal\geotimezone
 */
final class CountryTimezone implements TimezoneInterface {

  /**
   * List of time zone based on country code.
   *
   * @var array $listCode
   */
  private static $list;

  /**
   * Queried time zone identifier.
   *
   * @var array $identifier
   */
  private $identifier;

  /**
   * Queried time zone offset.
   *
   * @var array $offset
   */
  private $offset;

  /**
   * CountryTimezone constructor.
   *
   * @param array $location
   *   Location details in associative array with expected array keys of
   *   'countryCode'.
   */
  public function __construct($location) {
    if (isset($location['countryCode']) && !empty($location['countryCode'])) {
      static::$list = $this->loadList();
      $this->identifier = static::$list[$location['countryCode']];
      $this->identifier = array_values($this->identifier);
      if (!empty($this->identifier)) {
        // Convert to time zone offset
        foreach ($this->identifier as $identifier) {
          $time = new \DateTime('now', new \DateTimeZone($identifier));
          $this->offset[] = $time->format('P');
        }
      }
    }
    else {
      $this->identifier = '';
      $this->offset = '';
    }
  }

  /**
   * {@inheritdoc}
   */
  public function getIdentifier() {
    return $this->identifier;
  }

  /**
   * {@inheritdoc}
   */
  public function getOffset() {
    return $this->offset;
  }

  /**
   * Loads the list of time zone based on country code.
   *
   * @return array
   *   List of time zone based on country code.
   */
  private function loadList() {
    return [
      'AD' =>
        [
          '+4230+00131' => 'Europe/Andorra',
        ],
      'AE' =>
        [
          '+2518+05518' => 'Asia/Dubai',
        ],
      'AF' =>
        [
          '+3431+06912' => 'Asia/Kabul',
        ],
      'AG' =>
        [
          '+1703-06148' => 'America/Antigua',
        ],
      'AI' =>
        [
          '+1812-06304' => 'America/Anguilla',
        ],
      'AL' =>
        [
          '+4120+01950' => 'Europe/Tirane',
        ],
      'AM' =>
        [
          '+4011+04430' => 'Asia/Yerevan',
        ],
      'AO' =>
        [
          '-0848+01314' => 'Africa/Luanda',
        ],
      'AQ' =>
        [
          '-5430+15857' => 'Antarctica/Macquarie',
          '-6448-06406' => 'Antarctica/Palmer',
          '-6617+11031' => 'Antarctica/Casey',
          '-6640+14001' => 'Antarctica/DumontDUrville',
          '-6734-06808' => 'Antarctica/Rothera',
          '-6736+06253' => 'Antarctica/Mawson',
          '-6835+07758' => 'Antarctica/Davis',
          '-690022+0393524' => 'Antarctica/Syowa',
          '-7750+16636' => 'Antarctica/McMurdo',
          '-7824+10654' => 'Antarctica/Vostok',
          '-9000+00000' => 'Antarctica/South_Pole',
        ],
      'AR' =>
        [
          '-2411-06518' => 'America/Argentina/Jujuy',
          '-2447-06525' => 'America/Argentina/Salta',
          '-2649-06513' => 'America/Argentina/Tucuman',
          '-2828-06547' => 'America/Argentina/Catamarca',
          '-2926-06651' => 'America/Argentina/La_Rioja',
          '-3124-06411' => 'America/Argentina/Cordoba',
          '-3132-06831' => 'America/Argentina/San_Juan',
          '-3253-06849' => 'America/Argentina/Mendoza',
          '-3319-06621' => 'America/Argentina/San_Luis',
          '-3436-05827' => 'America/Argentina/Buenos_Aires',
          '-5138-06913' => 'America/Argentina/Rio_Gallegos',
          '-5448-06818' => 'America/Argentina/Ushuaia',
        ],
      'AS' =>
        [
          '-1416-17042' => 'Pacific/Pago_Pago',
        ],
      'AT' =>
        [
          '+4813+01620' => 'Europe/Vienna',
        ],
      'AU' =>
        [
          '-1228+13050' => 'Australia/Darwin',
          '-2016+14900' => 'Australia/Lindeman',
          '-2728+15302' => 'Australia/Brisbane',
          '-3133+15905' => 'Australia/Lord_Howe',
          '-3143+12852' => 'Australia/Eucla',
          '-3157+11551' => 'Australia/Perth',
          '-3157+14127' => 'Australia/Broken_Hill',
          '-3352+15113' => 'Australia/Sydney',
          '-3455+13835' => 'Australia/Adelaide',
          '-3749+14458' => 'Australia/Melbourne',
          '-3956+14352' => 'Australia/Currie',
          '-4253+14719' => 'Australia/Hobart',
        ],
      'AW' =>
        [
          '+1230-06958' => 'America/Aruba',
        ],
      'AX' =>
        [
          '+6006+01957' => 'Europe/Mariehamn',
        ],
      'AZ' =>
        [
          '+4023+04951' => 'Asia/Baku',
        ],
      'BA' =>
        [
          '+4352+01825' => 'Europe/Sarajevo',
        ],
      'BB' =>
        [
          '+1306-05937' => 'America/Barbados',
        ],
      'BD' =>
        [
          '+2343+09025' => 'Asia/Dhaka',
        ],
      'BE' =>
        [
          '+5050+00420' => 'Europe/Brussels',
        ],
      'BF' =>
        [
          '+1222-00131' => 'Africa/Ouagadougou',
        ],
      'BG' =>
        [
          '+4241+02319' => 'Europe/Sofia',
        ],
      'BH' =>
        [
          '+2623+05035' => 'Asia/Bahrain',
        ],
      'BI' =>
        [
          '-0323+02922' => 'Africa/Bujumbura',
        ],
      'BJ' =>
        [
          '+0629+00237' => 'Africa/Porto-Novo',
        ],
      'BL' =>
        [
          '+1753-06251' => 'America/St_Barthelemy',
        ],
      'BM' =>
        [
          '+3217-06446' => 'Atlantic/Bermuda',
        ],
      'BN' =>
        [
          '+0456+11455' => 'Asia/Brunei',
        ],
      'BO' =>
        [
          '-1630-06809' => 'America/La_Paz',
        ],
      'BQ' =>
        [
          '+120903-0681636' => 'America/Kralendijk',
        ],
      'BR' =>
        [
          '+0249-06040' => 'America/Boa_Vista',
          '-0127-04829' => 'America/Belem',
          '-0226-05452' => 'America/Santarem',
          '-0308-06001' => 'America/Manaus',
          '-0343-03830' => 'America/Fortaleza',
          '-0351-03225' => 'America/Noronha',
          '-0640-06952' => 'America/Eirunepe',
          '-0712-04812' => 'America/Araguaina',
          '-0803-03454' => 'America/Recife',
          '-0846-06354' => 'America/Porto_Velho',
          '-0940-03543' => 'America/Maceio',
          '-0958-06748' => 'America/Rio_Branco',
          '-1259-03831' => 'America/Bahia',
          '-1535-05605' => 'America/Cuiaba',
          '-2027-05437' => 'America/Campo_Grande',
          '-2332-04637' => 'America/Sao_Paulo',
        ],
      'BS' =>
        [
          '+2505-07721' => 'America/Nassau',
        ],
      'BT' =>
        [
          '+2728+08939' => 'Asia/Thimphu',
        ],
      'BW' =>
        [
          '-2439+02555' => 'Africa/Gaborone',
        ],
      'BY' =>
        [
          '+5354+02734' => 'Europe/Minsk',
        ],
      'BZ' =>
        [
          '+1730-08812' => 'America/Belize',
        ],
      'CA' =>
        [
          '+4339-07923' => 'America/Toronto',
          '+4439-06336' => 'America/Halifax',
          '+4531-07334' => 'America/Montreal',
          '+4606-06447' => 'America/Moncton',
          '+4612-05957' => 'America/Glace_Bay',
          '+4734-05243' => 'America/St_Johns',
          '+4823-08915' => 'America/Thunder_Bay',
          '+4843-09434' => 'America/Rainy_River',
          '+484531-0913718' => 'America/Atikokan',
          '+4901-08816' => 'America/Nipigon',
          '+4906-11631' => 'America/Creston',
          '+4916-12307' => 'America/Vancouver',
          '+4953-09709' => 'America/Winnipeg',
          '+5017-10750' => 'America/Swift_Current',
          '+5024-10439' => 'America/Regina',
          '+5125-05707' => 'America/Blanc-Sablon',
          '+5320-06025' => 'America/Goose_Bay',
          '+5333-11328' => 'America/Edmonton',
          '+5946-12014' => 'America/Dawson_Creek',
          '+6043-13503' => 'America/Whitehorse',
          '+6227-11421' => 'America/Yellowknife',
          '+624900-0920459' => 'America/Rankin_Inlet',
          '+6344-06828' => 'America/Iqaluit',
          '+6404-13925' => 'America/Dawson',
          '+6608-06544' => 'America/Pangnirtung',
          '+682059-1334300' => 'America/Inuvik',
          '+690650-1050310' => 'America/Cambridge_Bay',
          '+744144-0944945' => 'America/Resolute',
        ],
      'CC' =>
        [
          '-1210+09655' => 'Indian/Cocos',
        ],
      'CD' =>
        [
          '-0418+01518' => 'Africa/Kinshasa',
          '-1140+02728' => 'Africa/Lubumbashi',
        ],
      'CF' =>
        [
          '+0422+01835' => 'Africa/Bangui',
        ],
      'CG' =>
        [
          '-0416+01517' => 'Africa/Brazzaville',
        ],
      'CH' =>
        [
          '+4723+00832' => 'Europe/Zurich',
        ],
      'CI' =>
        [
          '+0519-00402' => 'Africa/Abidjan',
        ],
      'CK' =>
        [
          '-2114-15946' => 'Pacific/Rarotonga',
        ],
      'CL' =>
        [
          '-2709-10926' => 'Pacific/Easter',
          '-3327-07040' => 'America/Santiago',
        ],
      'CM' =>
        [
          '+0403+00942' => 'Africa/Douala',
        ],
      'CN' =>
        [
          '+2934+10635' => 'Asia/Chongqing',
          '+3114+12128' => 'Asia/Shanghai',
          '+3929+07559' => 'Asia/Kashgar',
          '+4348+08735' => 'Asia/Urumqi',
          '+4545+12641' => 'Asia/Harbin',
        ],
      'CO' =>
        [
          '+0436-07405' => 'America/Bogota',
        ],
      'CR' =>
        [
          '+0956-08405' => 'America/Costa_Rica',
        ],
      'CU' =>
        [
          '+2308-08222' => 'America/Havana',
        ],
      'CV' =>
        [
          '+1455-02331' => 'Atlantic/Cape_Verde',
        ],
      'CW' =>
        [
          '+1211-06900' => 'America/Curacao',
        ],
      'CX' =>
        [
          '-1025+10543' => 'Indian/Christmas',
        ],
      'CY' =>
        [
          '+3510+03322' => 'Asia/Nicosia',
        ],
      'CZ' =>
        [
          '+5005+01426' => 'Europe/Prague',
        ],
      'DE' =>
        [
          '+5230+01322' => 'Europe/Berlin',
        ],
      'DJ' =>
        [
          '+1136+04309' => 'Africa/Djibouti',
        ],
      'DK' =>
        [
          '+5540+01235' => 'Europe/Copenhagen',
        ],
      'DM' =>
        [
          '+1518-06124' => 'America/Dominica',
        ],
      'DO' =>
        [
          '+1828-06954' => 'America/Santo_Domingo',
        ],
      'DZ' =>
        [
          '+3647+00303' => 'Africa/Algiers',
        ],
      'EC' =>
        [
          '-0054-08936' => 'Pacific/Galapagos',
          '-0210-07950' => 'America/Guayaquil',
        ],
      'EE' =>
        [
          '+5925+02445' => 'Europe/Tallinn',
        ],
      'EG' =>
        [
          '+3003+03115' => 'Africa/Cairo',
        ],
      'EH' =>
        [
          '+2709-01312' => 'Africa/El_Aaiun',
        ],
      'ER' =>
        [
          '+1520+03853' => 'Africa/Asmara',
        ],
      'ES' =>
        [
          '+2806-01524' => 'Atlantic/Canary',
          '+3553-00519' => 'Africa/Ceuta',
          '+4024-00341' => 'Europe/Madrid',
        ],
      'ET' =>
        [
          '+0902+03842' => 'Africa/Addis_Ababa',
        ],
      'EU' =>
        [
          '+513030-0000731' => 'Europe/London',
        ],
      'FI' =>
        [
          '+6010+02458' => 'Europe/Helsinki',
        ],
      'FJ' =>
        [
          '-1808+17825' => 'Pacific/Fiji',
        ],
      'FK' =>
        [
          '-5142-05751' => 'Atlantic/Stanley',
        ],
      'FM' =>
        [
          '+0519+16259' => 'Pacific/Kosrae',
          '+0658+15813' => 'Pacific/Pohnpei',
          '+0725+15147' => 'Pacific/Chuuk',
        ],
      'FO' =>
        [
          '+6201-00646' => 'Atlantic/Faroe',
        ],
      'FR' =>
        [
          '+4852+00220' => 'Europe/Paris',
        ],
      'GA' =>
        [
          '+0023+00927' => 'Africa/Libreville',
        ],
      'GB' =>
        [
          '+513030-0000731' => 'Europe/London',
        ],
      'GD' =>
        [
          '+1203-06145' => 'America/Grenada',
        ],
      'GE' =>
        [
          '+4143+04449' => 'Asia/Tbilisi',
        ],
      'GF' =>
        [
          '+0456-05220' => 'America/Cayenne',
        ],
      'GG' =>
        [
          '+4927-00232' => 'Europe/Guernsey',
        ],
      'GH' =>
        [
          '+0533-00013' => 'Africa/Accra',
        ],
      'GI' =>
        [
          '+3608-00521' => 'Europe/Gibraltar',
        ],
      'GL' =>
        [
          '+6411-05144' => 'America/Godthab',
          '+7029-02158' => 'America/Scoresbysund',
          '+7634-06847' => 'America/Thule',
          '+7646-01840' => 'America/Danmarkshavn',
        ],
      'GM' =>
        [
          '+1328-01639' => 'Africa/Banjul',
        ],
      'GN' =>
        [
          '+0931-01343' => 'Africa/Conakry',
        ],
      'GP' =>
        [
          '+1614-06132' => 'America/Guadeloupe',
        ],
      'GQ' =>
        [
          '+0345+00847' => 'Africa/Malabo',
        ],
      'GR' =>
        [
          '+3758+02343' => 'Europe/Athens',
        ],
      'GS' =>
        [
          '-5416-03632' => 'Atlantic/South_Georgia',
        ],
      'GT' =>
        [
          '+1438-09031' => 'America/Guatemala',
        ],
      'GU' =>
        [
          '+1328+14445' => 'Pacific/Guam',
        ],
      'GW' =>
        [
          '+1151-01535' => 'Africa/Bissau',
        ],
      'GY' =>
        [
          '+0648-05810' => 'America/Guyana',
        ],
      'HK' =>
        [
          '+2217+11409' => 'Asia/Hong_Kong',
        ],
      'HN' =>
        [
          '+1406-08713' => 'America/Tegucigalpa',
        ],
      'HR' =>
        [
          '+4548+01558' => 'Europe/Zagreb',
        ],
      'HT' =>
        [
          '+1832-07220' => 'America/Port-au-Prince',
        ],
      'HU' =>
        [
          '+4730+01905' => 'Europe/Budapest',
        ],
      'ID' =>
        [
          '-0002+10920' => 'Asia/Pontianak',
          '-0232+14042' => 'Asia/Jayapura',
          '-0507+11924' => 'Asia/Makassar',
          '-0610+10648' => 'Asia/Jakarta',
        ],
      'IE' =>
        [
          '+5320-00615' => 'Europe/Dublin',
        ],
      'IL' =>
        [
          '+3146+03514' => 'Asia/Jerusalem',
        ],
      'IM' =>
        [
          '+5409-00428' => 'Europe/Isle_of_Man',
        ],
      'IN' =>
        [
          '+2232+08822' => 'Asia/Kolkata',
        ],
      'IO' =>
        [
          '-0720+07225' => 'Indian/Chagos',
        ],
      'IQ' =>
        [
          '+3321+04425' => 'Asia/Baghdad',
        ],
      'IR' =>
        [
          '+3540+05126' => 'Asia/Tehran',
        ],
      'IS' =>
        [
          '+6409-02151' => 'Atlantic/Reykjavik',
        ],
      'IT' =>
        [
          '+4154+01229' => 'Europe/Rome',
        ],
      'JE' =>
        [
          '+4912-00207' => 'Europe/Jersey',
        ],
      'JM' =>
        [
          '+1800-07648' => 'America/Jamaica',
        ],
      'JO' =>
        [
          '+3157+03556' => 'Asia/Amman',
        ],
      'JP' =>
        [
          '+353916+1394441' => 'Asia/Tokyo',
        ],
      'KE' =>
        [
          '-0117+03649' => 'Africa/Nairobi',
        ],
      'KG' =>
        [
          '+4254+07436' => 'Asia/Bishkek',
        ],
      'KH' =>
        [
          '+1133+10455' => 'Asia/Phnom_Penh',
        ],
      'KI' =>
        [
          '+0125+17300' => 'Pacific/Tarawa',
          '+0152-15720' => 'Pacific/Kiritimati',
          '-0308-17105' => 'Pacific/Enderbury',
        ],
      'KM' =>
        [
          '-1141+04316' => 'Indian/Comoro',
        ],
      'KN' =>
        [
          '+1718-06243' => 'America/St_Kitts',
        ],
      'KP' =>
        [
          '+3901+12545' => 'Asia/Pyongyang',
        ],
      'KR' =>
        [
          '+3733+12658' => 'Asia/Seoul',
        ],
      'KW' =>
        [
          '+2920+04759' => 'Asia/Kuwait',
        ],
      'KY' =>
        [
          '+1918-08123' => 'America/Cayman',
        ],
      'KZ' =>
        [
          '+4315+07657' => 'Asia/Almaty',
          '+4431+05016' => 'Asia/Aqtau',
          '+4448+06528' => 'Asia/Qyzylorda',
          '+5017+05710' => 'Asia/Aqtobe',
          '+5113+05121' => 'Asia/Oral',
        ],
      'LA' =>
        [
          '+1758+10236' => 'Asia/Vientiane',
        ],
      'LB' =>
        [
          '+3353+03530' => 'Asia/Beirut',
        ],
      'LC' =>
        [
          '+1401-06100' => 'America/St_Lucia',
        ],
      'LI' =>
        [
          '+4709+00931' => 'Europe/Vaduz',
        ],
      'LK' =>
        [
          '+0656+07951' => 'Asia/Colombo',
        ],
      'LR' =>
        [
          '+0618-01047' => 'Africa/Monrovia',
        ],
      'LS' =>
        [
          '-2928+02730' => 'Africa/Maseru',
        ],
      'LT' =>
        [
          '+5441+02519' => 'Europe/Vilnius',
        ],
      'LU' =>
        [
          '+4936+00609' => 'Europe/Luxembourg',
        ],
      'LV' =>
        [
          '+5657+02406' => 'Europe/Riga',
        ],
      'LY' =>
        [
          '+3254+01311' => 'Africa/Tripoli',
        ],
      'MA' =>
        [
          '+3339-00735' => 'Africa/Casablanca',
        ],
      'MC' =>
        [
          '+4342+00723' => 'Europe/Monaco',
        ],
      'MD' =>
        [
          '+4700+02850' => 'Europe/Chisinau',
        ],
      'ME' =>
        [
          '+4226+01916' => 'Europe/Podgorica',
        ],
      'MF' =>
        [
          '+1804-06305' => 'America/Marigot',
        ],
      'MG' =>
        [
          '-1855+04731' => 'Indian/Antananarivo',
        ],
      'MH' =>
        [
          '+0709+17112' => 'Pacific/Majuro',
          '+0905+16720' => 'Pacific/Kwajalein',
        ],
      'MK' =>
        [
          '+4159+02126' => 'Europe/Skopje',
        ],
      'ML' =>
        [
          '+1239-00800' => 'Africa/Bamako',
        ],
      'MM' =>
        [
          '+1647+09610' => 'Asia/Rangoon',
        ],
      'MN' =>
        [
          '+4755+10653' => 'Asia/Ulaanbaatar',
          '+4801+09139' => 'Asia/Hovd',
          '+4804+11430' => 'Asia/Choibalsan',
        ],
      'MO' =>
        [
          '+2214+11335' => 'Asia/Macau',
        ],
      'MP' =>
        [
          '+1512+14545' => 'Pacific/Saipan',
        ],
      'MQ' =>
        [
          '+1436-06105' => 'America/Martinique',
        ],
      'MR' =>
        [
          '+1806-01557' => 'Africa/Nouakchott',
        ],
      'MS' =>
        [
          '+1643-06213' => 'America/Montserrat',
        ],
      'MT' =>
        [
          '+3554+01431' => 'Europe/Malta',
        ],
      'MU' =>
        [
          '-2010+05730' => 'Indian/Mauritius',
        ],
      'MV' =>
        [
          '+0410+07330' => 'Indian/Maldives',
        ],
      'MW' =>
        [
          '-1547+03500' => 'Africa/Blantyre',
        ],
      'MX' =>
        [
          '+1924-09909' => 'America/Mexico_City',
          '+2048-10515' => 'America/Bahia_Banderas',
          '+2058-08937' => 'America/Merida',
          '+2105-08646' => 'America/Cancun',
          '+2313-10625' => 'America/Mazatlan',
          '+2540-10019' => 'America/Monterrey',
          '+2550-09730' => 'America/Matamoros',
          '+2838-10605' => 'America/Chihuahua',
          '+2904-11058' => 'America/Hermosillo',
          '+2934-10425' => 'America/Ojinaga',
          '+3018-11452' => 'America/Santa_Isabel',
          '+3232-11701' => 'America/Tijuana',
        ],
      'MY' =>
        [
          '+0133+11020' => 'Asia/Kuching',
          '+0310+10142' => 'Asia/Kuala_Lumpur',
        ],
      'MZ' =>
        [
          '-2558+03235' => 'Africa/Maputo',
        ],
      'NA' =>
        [
          '-2234+01706' => 'Africa/Windhoek',
        ],
      'NC' =>
        [
          '-2216+16627' => 'Pacific/Noumea',
        ],
      'NE' =>
        [
          '+1331+00207' => 'Africa/Niamey',
        ],
      'NF' =>
        [
          '-2903+16758' => 'Pacific/Norfolk',
        ],
      'NG' =>
        [
          '+0627+00324' => 'Africa/Lagos',
        ],
      'NI' =>
        [
          '+1209-08617' => 'America/Managua',
        ],
      'NL' =>
        [
          '+5222+00454' => 'Europe/Amsterdam',
        ],
      'NO' =>
        [
          '+5955+01045' => 'Europe/Oslo',
        ],
      'NP' =>
        [
          '+2743+08519' => 'Asia/Kathmandu',
        ],
      'NR' =>
        [
          '-0031+16655' => 'Pacific/Nauru',
        ],
      'NU' =>
        [
          '-1901-16955' => 'Pacific/Niue',
        ],
      'NZ' =>
        [
          '-3652+17446' => 'Pacific/Auckland',
          '-4357-17633' => 'Pacific/Chatham',
        ],
      'OM' =>
        [
          '+2336+05835' => 'Asia/Muscat',
        ],
      'PA' =>
        [
          '+0858-07932' => 'America/Panama',
        ],
      'PE' =>
        [
          '-1203-07703' => 'America/Lima',
        ],
      'PF' =>
        [
          '-0900-13930' => 'Pacific/Marquesas',
          '-1732-14934' => 'Pacific/Tahiti',
          '-2308-13457' => 'Pacific/Gambier',
        ],
      'PG' =>
        [
          '-0930+14710' => 'Pacific/Port_Moresby',
        ],
      'PH' =>
        [
          '+1435+12100' => 'Asia/Manila',
        ],
      'PK' =>
        [
          '+2452+06703' => 'Asia/Karachi',
        ],
      'PL' =>
        [
          '+5215+02100' => 'Europe/Warsaw',
        ],
      'PM' =>
        [
          '+4703-05620' => 'America/Miquelon',
        ],
      'PN' =>
        [
          '-2504-13005' => 'Pacific/Pitcairn',
        ],
      'PR' =>
        [
          '+182806-0660622' => 'America/Puerto_Rico',
        ],
      'PS' =>
        [
          '+3130+03428' => 'Asia/Gaza',
          '+313200+0350542' => 'Asia/Hebron',
        ],
      'PT' =>
        [
          '+3238-01654' => 'Atlantic/Madeira',
          '+3744-02540' => 'Atlantic/Azores',
          '+3843-00908' => 'Europe/Lisbon',
        ],
      'PW' =>
        [
          '+0720+13429' => 'Pacific/Palau',
        ],
      'PY' =>
        [
          '-2516-05740' => 'America/Asuncion',
        ],
      'QA' =>
        [
          '+2517+05132' => 'Asia/Qatar',
        ],
      'RE' =>
        [
          '-2052+05528' => 'Indian/Reunion',
        ],
      'RO' =>
        [
          '+4426+02606' => 'Europe/Bucharest',
        ],
      'RS' =>
        [
          '+4450+02030' => 'Europe/Belgrade',
        ],
      'RU' =>
        [
          '+4310+13156' => 'Asia/Vladivostok',
          '+4658+14242' => 'Asia/Sakhalin',
          '+4844+04425' => 'Europe/Volgograd',
          '+5216+10420' => 'Asia/Irkutsk',
          '+5301+15839' => 'Asia/Kamchatka',
          '+5312+05009' => 'Europe/Samara',
          '+5345+08707' => 'Asia/Novokuznetsk',
          '+5443+02030' => 'Europe/Kaliningrad',
          '+5500+07324' => 'Asia/Omsk',
          '+5502+08255' => 'Asia/Novosibirsk',
          '+5545+03735' => 'Europe/Moscow',
          '+5601+09250' => 'Asia/Krasnoyarsk',
          '+5651+06036' => 'Asia/Yekaterinburg',
          '+5934+15048' => 'Asia/Magadan',
          '+6200+12940' => 'Asia/Yakutsk',
          '+6445+17729' => 'Asia/Anadyr',
        ],
      'RW' =>
        [
          '-0157+03004' => 'Africa/Kigali',
        ],
      'SA' =>
        [
          '+2438+04643' => 'Asia/Riyadh',
        ],
      'SB' =>
        [
          '-0932+16012' => 'Pacific/Guadalcanal',
        ],
      'SC' =>
        [
          '-0440+05528' => 'Indian/Mahe',
        ],
      'SD' =>
        [
          '+1536+03232' => 'Africa/Khartoum',
        ],
      'SE' =>
        [
          '+5920+01803' => 'Europe/Stockholm',
        ],
      'SG' =>
        [
          '+0117+10351' => 'Asia/Singapore',
        ],
      'SH' =>
        [
          '-1555-00542' => 'Atlantic/St_Helena',
        ],
      'SI' =>
        [
          '+4603+01431' => 'Europe/Ljubljana',
        ],
      'SJ' =>
        [
          '+7800+01600' => 'Arctic/Longyearbyen',
        ],
      'SK' =>
        [
          '+4809+01707' => 'Europe/Bratislava',
        ],
      'SL' =>
        [
          '+0830-01315' => 'Africa/Freetown',
        ],
      'SM' =>
        [
          '+4355+01228' => 'Europe/San_Marino',
        ],
      'SN' =>
        [
          '+1440-01726' => 'Africa/Dakar',
        ],
      'SO' =>
        [
          '+0204+04522' => 'Africa/Mogadishu',
        ],
      'SR' =>
        [
          '+0550-05510' => 'America/Paramaribo',
        ],
      'SS' =>
        [
          '+0451+03136' => 'Africa/Juba',
        ],
      'ST' =>
        [
          '+0020+00644' => 'Africa/Sao_Tome',
        ],
      'SV' =>
        [
          '+1342-08912' => 'America/El_Salvador',
        ],
      'SX' =>
        [
          '+180305-0630250' => 'America/Lower_Princes',
        ],
      'SY' =>
        [
          '+3330+03618' => 'Asia/Damascus',
        ],
      'SZ' =>
        [
          '-2618+03106' => 'Africa/Mbabane',
        ],
      'TC' =>
        [
          '+2128-07108' => 'America/Grand_Turk',
        ],
      'TD' =>
        [
          '+1207+01503' => 'Africa/Ndjamena',
        ],
      'TF' =>
        [
          '-492110+0701303' => 'Indian/Kerguelen',
        ],
      'TG' =>
        [
          '+0608+00113' => 'Africa/Lome',
        ],
      'TH' =>
        [
          '+1345+10031' => 'Asia/Bangkok',
        ],
      'TJ' =>
        [
          '+3835+06848' => 'Asia/Dushanbe',
        ],
      'TK' =>
        [
          '-0922-17114' => 'Pacific/Fakaofo',
        ],
      'TL' =>
        [
          '-0833+12535' => 'Asia/Dili',
        ],
      'TM' =>
        [
          '+3757+05823' => 'Asia/Ashgabat',
        ],
      'TN' =>
        [
          '+3648+01011' => 'Africa/Tunis',
        ],
      'TO' =>
        [
          '-2110-17510' => 'Pacific/Tongatapu',
        ],
      'TR' =>
        [
          '+4101+02858' => 'Europe/Istanbul',
        ],
      'TT' =>
        [
          '+1039-06131' => 'America/Port_of_Spain',
        ],
      'TV' =>
        [
          '-0831+17913' => 'Pacific/Funafuti',
        ],
      'TW' =>
        [
          '+2503+12130' => 'Asia/Taipei',
        ],
      'TZ' =>
        [
          '-0648+03917' => 'Africa/Dar_es_Salaam',
        ],
      'UA' =>
        [
          '+4457+03406' => 'Europe/Simferopol',
          '+4750+03510' => 'Europe/Zaporozhye',
          '+4837+02218' => 'Europe/Uzhgorod',
          '+5026+03031' => 'Europe/Kiev',
        ],
      'UG' =>
        [
          '+0019+03225' => 'Africa/Kampala',
        ],
      'UM' =>
        [
          '+1645-16931' => 'Pacific/Johnston',
          '+1917+16637' => 'Pacific/Wake',
          '+2813-17722' => 'Pacific/Midway',
        ],
      'US' =>
        [
          '+211825-1575130' => 'Pacific/Honolulu',
          '+332654-1120424' => 'America/Phoenix',
          '+340308-1181434' => 'America/Los_Angeles',
          '+364708-1084111' => 'America/Shiprock',
          '+364947-0845057' => 'America/Kentucky/Monticello',
          '+375711-0864541' => 'America/Indiana/Tell_City',
          '+381515-0854534' => 'America/Kentucky/Louisville',
          '+382232-0862041' => 'America/Indiana/Marengo',
          '+382931-0871643' => 'America/Indiana/Petersburg',
          '+384038-0873143' => 'America/Indiana/Vincennes',
          '+384452-0850402' => 'America/Indiana/Vevay',
          '+394421-1045903' => 'America/Denver',
          '+394606-0860929' => 'America/Indiana/Indianapolis',
          '+404251-0740023' => 'America/New_York',
          '+410305-0863611' => 'America/Indiana/Winamac',
          '+411745-0863730' => 'America/Indiana/Knox',
          '+415100-0873900' => 'America/Chicago',
          '+421953-0830245' => 'America/Detroit',
          '+433649-1161209' => 'America/Boise',
          '+450628-0873651' => 'America/Menominee',
          '+465042-1012439' => 'America/North_Dakota/New_Salem',
          '+470659-1011757' => 'America/North_Dakota/Center',
          '+471551-1014640' => 'America/North_Dakota/Beulah',
          '+515248-1763929' => 'America/Adak',
          '+550737-1313435' => 'America/Metlakatla',
          '+571035-1351807' => 'America/Sitka',
          '+581807-1342511' => 'America/Juneau',
          '+593249-1394338' => 'America/Yakutat',
          '+611305-1495401' => 'America/Anchorage',
          '+643004-1652423' => 'America/Nome',
        ],
      'UY' =>
        [
          '-3453-05611' => 'America/Montevideo',
        ],
      'UZ' =>
        [
          '+3940+06648' => 'Asia/Samarkand',
          '+4120+06918' => 'Asia/Tashkent',
        ],
      'VA' =>
        [
          '+415408+0122711' => 'Europe/Vatican',
        ],
      'VC' =>
        [
          '+1309-06114' => 'America/St_Vincent',
        ],
      'VE' =>
        [
          '+1030-06656' => 'America/Caracas',
        ],
      'VG' =>
        [
          '+1827-06437' => 'America/Tortola',
        ],
      'VI' =>
        [
          '+1821-06456' => 'America/St_Thomas',
        ],
      'VN' =>
        [
          '+1045+10640' => 'Asia/Ho_Chi_Minh',
        ],
      'VU' =>
        [
          '-1740+16825' => 'Pacific/Efate',
        ],
      'WF' =>
        [
          '-1318-17610' => 'Pacific/Wallis',
        ],
      'WS' =>
        [
          '-1350-17144' => 'Pacific/Apia',
        ],
      'YE' =>
        [
          '+1245+04512' => 'Asia/Aden',
        ],
      'YT' =>
        [
          '-1247+04514' => 'Indian/Mayotte',
        ],
      'ZA' =>
        [
          '-2615+02800' => 'Africa/Johannesburg',
        ],
      'ZM' =>
        [
          '-1525+02817' => 'Africa/Lusaka',
        ],
      'ZW' =>
        [
          '-1750+03103' => 'Africa/Harare',
        ],
      'TA' =>
        [
          '-1555-00542' => 'Atlantic/St_Helena',
        ],
      'AC' =>
        [
          '-1555-00542' => 'Atlantic/St_Helena',
        ],
      'BV' =>
        [
          '+5955+01045' => 'Europe/Oslo',
        ],
      'IC' =>
        [
          '+2806-01524' => 'Atlantic/Canary',
        ],
      'EA' =>
        [
          '+3553-00519' => 'Africa/Ceuta',
        ],
      'CP' =>
        [
          '-0900-13930' => 'Pacific/Marquesas',
        ],
      'DG' =>
        [
          '-0720+07225' => 'Indian/Chagos',
        ],
      'HM' =>
        [
          '-492110+0701303' => 'Indian/Kerguelen',
        ],
      'XK' =>
        [
          '+4450+02030' => 'Europe/Belgrade',
        ],
      'AN' =>
        [
          '+1211-06900' => 'America/Curacao',
        ],
    ];
  }
}
