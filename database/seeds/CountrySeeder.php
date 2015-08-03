<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function run()
    {
        $countries = array(
            array('id' => '1', 'name' => 'Afghanistan', 'iso_code' => 'af', 'zip' => '93'),
            array('id' => '2', 'name' => 'Albania', 'iso_code' => 'al', 'zip' => '355'),
            array('id' => '3', 'name' => 'Algeria', 'iso_code' => 'dz', 'zip' => '213'),
            array('id' => '181', 'name' => 'Turks and Caicos Islands', 'iso_code' => 'tc', 'zip' => '1'),
            array('id' => '5', 'name' => 'Andorra', 'iso_code' => 'ad', 'zip' => '376'),
            array('id' => '6', 'name' => 'Angola', 'iso_code' => 'ao', 'zip' => '244'),
            array('id' => '9', 'name' => 'Argentina', 'iso_code' => 'ar', 'zip' => '54'),
            array('id' => '10', 'name' => 'Armenia', 'iso_code' => 'am', 'zip' => '374'),
            array('id' => '11', 'name' => 'Aruba', 'iso_code' => 'aw', 'zip' => '297'),
            array('id' => '39', 'name' => 'Christmas Island', 'iso_code' => 'cx', 'zip' => '61'),
            array('id' => '13', 'name' => 'Austria', 'iso_code' => 'at', 'zip' => '43'),
            array('id' => '14', 'name' => 'Azerbaijan', 'iso_code' => 'az', 'zip' => '994'),
            array('id' => '16', 'name' => 'Bahrain', 'iso_code' => 'bh', 'zip' => '973'),
            array('id' => '17', 'name' => 'Bangladesh', 'iso_code' => 'bd', 'zip' => '880'),
            array('id' => '19', 'name' => 'Belarus', 'iso_code' => 'by', 'zip' => '375'),
            array('id' => '20', 'name' => 'Belgium', 'iso_code' => 'be', 'zip' => '32'),
            array('id' => '21', 'name' => 'Belize', 'iso_code' => 'bz', 'zip' => '501'),
            array('id' => '22', 'name' => 'Benin', 'iso_code' => 'bj', 'zip' => '229'),
            array('id' => '24', 'name' => 'Bhutan', 'iso_code' => 'bt', 'zip' => '975'),
            array('id' => '25', 'name' => 'Botswana', 'iso_code' => 'bw', 'zip' => '267'),
            array('id' => '26', 'name' => 'Brazil', 'iso_code' => 'br', 'zip' => '55'),
            array('id' => '27', 'name' => 'Brunei Darussalam', 'iso_code' => 'bn', 'zip' => '673'),
            array('id' => '28', 'name' => 'Bulgaria', 'iso_code' => 'bg', 'zip' => '359'),
            array('id' => '29', 'name' => 'Burkina Faso', 'iso_code' => 'bf', 'zip' => '226'),
            array('id' => '30', 'name' => 'Burundi', 'iso_code' => 'bi', 'zip' => '257'),
            array('id' => '31', 'name' => 'Cambodia', 'iso_code' => 'kh', 'zip' => '855'),
            array('id' => '32', 'name' => 'Cameroon', 'iso_code' => 'cm', 'zip' => '237'),
            array('id' => '34', 'name' => 'Cape Verde', 'iso_code' => 'cv', 'zip' => '238'),
            array('id' => '36', 'name' => 'Central African Republic', 'iso_code' => 'cf', 'zip' => '236'),
            array('id' => '37', 'name' => 'Chad', 'iso_code' => 'td', 'zip' => '235'),
            array('id' => '38', 'name' => 'Chile', 'iso_code' => 'cl', 'zip' => '56'),
            array('id' => '40', 'name' => 'Colombia', 'iso_code' => 'co', 'zip' => '57'),
            array('id' => '41', 'name' => 'Comoros', 'iso_code' => 'km', 'zip' => '269'),
            array('id' => '42', 'name' => 'Cook Islands', 'iso_code' => 'ck', 'zip' => '682'),
            array('id' => '43', 'name' => 'Costa Rica', 'iso_code' => 'cr', 'zip' => '506'),
            array('id' => '44', 'name' => 'Croatia', 'iso_code' => 'hr', 'zip' => '385'),
            array('id' => '45', 'name' => 'Cuba', 'iso_code' => 'cu', 'zip' => '53'),
            array('id' => '46', 'name' => 'Cyprus', 'iso_code' => 'cy', 'zip' => '357'),
            array('id' => '47', 'name' => 'Czech Republic', 'iso_code' => 'cz', 'zip' => '420'),
            array('id' => '48', 'name' => 'Denmark', 'iso_code' => 'dk', 'zip' => '45'),
            array('id' => '49', 'name' => 'Djibouti', 'iso_code' => 'dj', 'zip' => '253'),
            array('id' => '52', 'name' => 'Ecuador', 'iso_code' => 'ec', 'zip' => '593'),
            array('id' => '53', 'name' => 'Egypt', 'iso_code' => 'eg', 'zip' => '20'),
            array('id' => '54', 'name' => 'El Salvador', 'iso_code' => 'sv', 'zip' => '503'),
            array('id' => '55', 'name' => 'Equatorial Guinea', 'iso_code' => 'gq', 'zip' => '240'),
            array('id' => '56', 'name' => 'Eritrea', 'iso_code' => 'er', 'zip' => '291'),
            array('id' => '57', 'name' => 'Estonia', 'iso_code' => 'ee', 'zip' => '372'),
            array('id' => '58', 'name' => 'Ethiopia', 'iso_code' => 'et', 'zip' => '251'),
            array('id' => '59', 'name' => 'Faroe Islands', 'iso_code' => 'fo', 'zip' => '298'),
            array('id' => '60', 'name' => 'Fiji', 'iso_code' => 'fj', 'zip' => '679'),
            array('id' => '61', 'name' => 'Finland', 'iso_code' => 'fi', 'zip' => '358'),
            array('id' => '62', 'name' => 'France', 'iso_code' => 'fr', 'zip' => '33'),
            array('id' => '63', 'name' => 'French Guiana', 'iso_code' => 'gf', 'zip' => '594'),
            array('id' => '64', 'name' => 'French Polynesia', 'iso_code' => 'pf', 'zip' => '689'),
            array('id' => '65', 'name' => 'Gabon', 'iso_code' => 'ga', 'zip' => '241'),
            array('id' => '66', 'name' => 'Gambia', 'iso_code' => 'gm', 'zip' => '220'),
            array('id' => '67', 'name' => 'Georgia', 'iso_code' => 'ge', 'zip' => '995'),
            array('id' => '68', 'name' => 'Germany', 'iso_code' => 'de', 'zip' => '49'),
            array('id' => '69', 'name' => 'Ghana', 'iso_code' => 'gh', 'zip' => '233'),
            array('id' => '70', 'name' => 'Gibraltar', 'iso_code' => 'gi', 'zip' => '350'),
            array('id' => '71', 'name' => 'Greece', 'iso_code' => 'gr', 'zip' => '30'),
            array('id' => '72', 'name' => 'Greenland', 'iso_code' => 'gl', 'zip' => '299'),
            array('id' => '74', 'name' => 'Guadeloupe', 'iso_code' => 'gp', 'zip' => '590'),
            array('id' => '76', 'name' => 'Guatemala', 'iso_code' => 'gt', 'zip' => '502'),
            array('id' => '77', 'name' => 'Guinea', 'iso_code' => 'gn', 'zip' => '224'),
            array('id' => '78', 'name' => 'Guinea-Bissau', 'iso_code' => 'gw', 'zip' => '245'),
            array('id' => '79', 'name' => 'Guyana', 'iso_code' => 'gy', 'zip' => '592'),
            array('id' => '80', 'name' => 'Haiti', 'iso_code' => 'ht', 'zip' => '509'),
            array('id' => '81', 'name' => 'Honduras', 'iso_code' => 'hn', 'zip' => '504'),
            array('id' => '82', 'name' => 'Hong Kong', 'iso_code' => 'hk', 'zip' => '852'),
            array('id' => '83', 'name' => 'Hungary', 'iso_code' => 'hu', 'zip' => '36'),
            array('id' => '84', 'name' => 'Iceland', 'iso_code' => 'is', 'zip' => '354'),
            array('id' => '85', 'name' => 'India', 'iso_code' => 'in', 'zip' => '91'),
            array('id' => '86', 'name' => 'Indonesia', 'iso_code' => 'id', 'zip' => '62'),
            array('id' => '87', 'name' => 'Iraq', 'iso_code' => 'iq', 'zip' => '964'),
            array('id' => '88', 'name' => 'Ireland', 'iso_code' => 'ie', 'zip' => ''),
            array('id' => '89', 'name' => 'Israel', 'iso_code' => 'il', 'zip' => '972'),
            array('id' => '91', 'name' => 'Japan', 'iso_code' => 'jp', 'zip' => '81'),
            array('id' => '92', 'name' => 'Jordan', 'iso_code' => 'jo', 'zip' => '962'),
            array('id' => '93', 'name' => 'Kazakhstan', 'iso_code' => 'kz', 'zip' => '7'),
            array('id' => '94', 'name' => 'Kenya', 'iso_code' => 'ke', 'zip' => '254'),
            array('id' => '95', 'name' => 'Kuwait', 'iso_code' => 'kw', 'zip' => '965'),
            array('id' => '96', 'name' => 'Kyrgyzstan', 'iso_code' => 'kg', 'zip' => '996'),
            array('id' => '97', 'name' => 'Latvia', 'iso_code' => 'lv', 'zip' => '371'),
            array('id' => '98', 'name' => 'Lebanon', 'iso_code' => 'lb', 'zip' => '961'),
            array('id' => '99', 'name' => 'Lesotho', 'iso_code' => 'ls', 'zip' => '266'),
            array('id' => '100', 'name' => 'Liberia', 'iso_code' => 'lr', 'zip' => '231'),
            array('id' => '101', 'name' => 'Libya', 'iso_code' => 'ly', 'zip' => '218'),
            array('id' => '102', 'name' => 'Liechtenstein', 'iso_code' => 'li', 'zip' => '423'),
            array('id' => '103', 'name' => 'Lithuania', 'iso_code' => 'lt', 'zip' => '370'),
            array('id' => '104', 'name' => 'Luxembourg', 'iso_code' => 'lu', 'zip' => '352'),
            array('id' => '105', 'name' => 'Madagascar', 'iso_code' => 'mg', 'zip' => '261'),
            array('id' => '106', 'name' => 'Malawi', 'iso_code' => 'mw', 'zip' => '265'),
            array('id' => '107', 'name' => 'Malaysia', 'iso_code' => 'my', 'zip' => '60'),
            array('id' => '108', 'name' => 'Maldives', 'iso_code' => 'mv', 'zip' => '960'),
            array('id' => '109', 'name' => 'Mali', 'iso_code' => 'ml', 'zip' => '223'),
            array('id' => '110', 'name' => 'Malta', 'iso_code' => 'mt', 'zip' => '356'),
            array('id' => '111', 'name' => 'Marshall Islands', 'iso_code' => 'mh', 'zip' => '692'),
            array('id' => '112', 'name' => 'Martinique', 'iso_code' => 'mq', 'zip' => '596'),
            array('id' => '113', 'name' => 'Mauritania', 'iso_code' => 'mr', 'zip' => '222'),
            array('id' => '114', 'name' => 'Mauritius', 'iso_code' => 'mu', 'zip' => '230'),
            array('id' => '115', 'name' => 'Mayotte', 'iso_code' => 'yt', 'zip' => '262'),
            array('id' => '116', 'name' => 'Mexico', 'iso_code' => 'mx', 'zip' => '52'),
            array('id' => '117', 'name' => 'Monaco', 'iso_code' => 'mc', 'zip' => '377'),
            array('id' => '118', 'name' => 'Mongolia', 'iso_code' => 'mn', 'zip' => '976'),
            array('id' => '119', 'name' => 'Montenegro', 'iso_code' => 'me', 'zip' => '382'),
            array('id' => '121', 'name' => 'Morocco', 'iso_code' => 'ma', 'zip' => '212'),
            array('id' => '122', 'name' => 'Mozambique', 'iso_code' => 'mz', 'zip' => '258'),
            array('id' => '123', 'name' => 'Myanmar', 'iso_code' => 'mm', 'zip' => '95'),
            array('id' => '124', 'name' => 'Namibia', 'iso_code' => 'na', 'zip' => '264'),
            array('id' => '125', 'name' => 'Nauru', 'iso_code' => 'nr', 'zip' => '674'),
            array('id' => '126', 'name' => 'Nepal', 'iso_code' => 'np', 'zip' => '977'),
            array('id' => '127', 'name' => 'New Caledonia', 'iso_code' => 'nc', 'zip' => '687'),
            array('id' => '128', 'name' => 'New Zealand', 'iso_code' => 'nz', 'zip' => '64'),
            array('id' => '129', 'name' => 'Nicaragua', 'iso_code' => 'ni', 'zip' => '505'),
            array('id' => '130', 'name' => 'Niger', 'iso_code' => 'ne', 'zip' => '227'),
            array('id' => '131', 'name' => 'Nigeria', 'iso_code' => 'ng', 'zip' => '234'),
            array('id' => '132', 'name' => 'Norfolk Island', 'iso_code' => 'nf', 'zip' => '672'),
            array('id' => '134', 'name' => 'Norway', 'iso_code' => 'no', 'zip' => '47'),
            array('id' => '135', 'name' => 'Oman', 'iso_code' => 'om', 'zip' => '968'),
            array('id' => '136', 'name' => 'Pakistan', 'iso_code' => 'pk', 'zip' => '92'),
            array('id' => '137', 'name' => 'Palau', 'iso_code' => 'pw', 'zip' => '680'),
            array('id' => '138', 'name' => 'Panama', 'iso_code' => 'pa', 'zip' => '507'),
            array('id' => '139', 'name' => 'Papua New Guinea', 'iso_code' => 'pg', 'zip' => '675'),
            array('id' => '140', 'name' => 'Paraguay', 'iso_code' => 'py', 'zip' => '595'),
            array('id' => '141', 'name' => 'Peru', 'iso_code' => 'pe', 'zip' => '51'),
            array('id' => '142', 'name' => 'Philippines', 'iso_code' => 'ph', 'zip' => '63'),
            array('id' => '143', 'name' => 'Poland', 'iso_code' => 'pl', 'zip' => '48'),
            array('id' => '144', 'name' => 'Portugal', 'iso_code' => 'pt', 'zip' => '351'),
            array('id' => '146', 'name' => 'Qatar', 'iso_code' => 'qa', 'zip' => '974'),
            array('id' => '147', 'name' => 'Romania', 'iso_code' => 'ro', 'zip' => '40'),
            array('id' => '148', 'name' => 'Rwanda', 'iso_code' => 'rw', 'zip' => '250'),
            array('id' => '152', 'name' => 'Samoa', 'iso_code' => 'ws', 'zip' => '685'),
            array('id' => '153', 'name' => 'San Marino', 'iso_code' => 'sm', 'zip' => '378'),
            array('id' => '154', 'name' => 'Saudi Arabia', 'iso_code' => 'sa', 'zip' => '966'),
            array('id' => '155', 'name' => 'Senegal', 'iso_code' => 'sn', 'zip' => '221'),
            array('id' => '156', 'name' => 'Serbia', 'iso_code' => 'rs', 'zip' => '381'),
            array('id' => '157', 'name' => 'Seychelles', 'iso_code' => 'sc', 'zip' => '248'),
            array('id' => '158', 'name' => 'Sierra Leone', 'iso_code' => 'sl', 'zip' => '232'),
            array('id' => '159', 'name' => 'Singapore', 'iso_code' => 'sg', 'zip' => '65'),
            array('id' => '160', 'name' => 'Slovakia', 'iso_code' => 'sk', 'zip' => '421'),
            array('id' => '161', 'name' => 'Slovenia', 'iso_code' => 'si', 'zip' => '386'),
            array('id' => '162', 'name' => 'Solomon Islands', 'iso_code' => 'sb', 'zip' => '677'),
            array('id' => '163', 'name' => 'Somalia', 'iso_code' => 'so', 'zip' => '252'),
            array('id' => '164', 'name' => 'South Africa', 'iso_code' => 'za', 'zip' => '27'),
            array('id' => '165', 'name' => 'Spain', 'iso_code' => 'es', 'zip' => '34'),
            array('id' => '166', 'name' => 'Sri Lanka', 'iso_code' => 'lk', 'zip' => '94'),
            array('id' => '167', 'name' => 'Sudan', 'iso_code' => 'sd', 'zip' => '249'),
            array('id' => '168', 'name' => 'Suriname', 'iso_code' => 'sr', 'zip' => '597'),
            array('id' => '169', 'name' => 'Swaziland', 'iso_code' => 'sz', 'zip' => '268'),
            array('id' => '170', 'name' => 'Sweden', 'iso_code' => 'se', 'zip' => '46'),
            array('id' => '171', 'name' => 'Switzerland', 'iso_code' => 'ch', 'zip' => '41'),
            array('id' => '172', 'name' => 'Tajikistan', 'iso_code' => 'tj', 'zip' => '992'),
            array('id' => '173', 'name' => 'Thailand', 'iso_code' => 'th', 'zip' => '66'),
            array('id' => '174', 'name' => 'Togo', 'iso_code' => 'tg', 'zip' => '228'),
            array('id' => '175', 'name' => 'Tokelau', 'iso_code' => 'tk', 'zip' => '690'),
            array('id' => '176', 'name' => 'Tonga', 'iso_code' => 'to', 'zip' => '676'),
            array('id' => '178', 'name' => 'Tunisia', 'iso_code' => 'tn', 'zip' => '216'),
            array('id' => '179', 'name' => 'Turkey', 'iso_code' => 'tr', 'zip' => '90'),
            array('id' => '180', 'name' => 'Turkmenistan', 'iso_code' => 'tm', 'zip' => '993'),
            array('id' => '182', 'name' => 'Uganda', 'iso_code' => 'ug', 'zip' => '256'),
            array('id' => '183', 'name' => 'Ukraine', 'iso_code' => 'ua', 'zip' => '380'),
            array('id' => '184', 'name' => 'United Arab Emirates', 'iso_code' => 'ae', 'zip' => '971'),
            array('id' => '185', 'name' => 'United Kingdom', 'iso_code' => 'gb', 'zip' => '44'),
            array('id' => '186', 'name' => 'Uruguay', 'iso_code' => 'uy', 'zip' => '598'),
            array('id' => '187', 'name' => 'Uzbekistan', 'iso_code' => 'uz', 'zip' => '998'),
            array('id' => '188', 'name' => 'Vanuatu', 'iso_code' => 'vu', 'zip' => '678'),
            array('id' => '189', 'name' => 'Wallis and Futuna', 'iso_code' => 'wf', 'zip' => '681'),
            array('id' => '190', 'name' => 'Yemen', 'iso_code' => 'ye', 'zip' => '967'),
            array('id' => '191', 'name' => 'Zambia', 'iso_code' => 'zm', 'zip' => '260'),
            array('id' => '192', 'name' => 'Zimbabwe', 'iso_code' => 'zw', 'zip' => '263')
        );

        DB::table('countries')->insert( $countries );

    }

}