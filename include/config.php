<?php session_start();
if ($_SERVER['HTTP_HOST'] == 'localhost' || ($_SERVER['HTTP_HOST'] == '127.0.0.1'))
{
    $dbhost = "localhost"; 
    $dbuser = "root";
    $dbpass = "";
    $dbname = "affiliate"; 
}
else
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "affiliate";
}

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
mysql_select_db($dbname);

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

if (!headers_sent())
{
    header('Content-type: text/html; charset=UTF-8');
}

define('BASEURL', "http://localhost/Affliates/");
define('PROJECTNAME', "Affliates");
define('DIR_FS', $_SERVER['DOCUMENT_ROOT'] . '/Affliates/');
define('DIR_WS_TEMPLATES', DIR_FS . 'templates/');
define('DIR_WS_TEMPLATES_AFFILIATES', DIR_WS_TEMPLATES . 'affiliates/');
define('DIR_WS_TEMPLATES_MERCHANT', DIR_WS_TEMPLATES . 'merchant/');
define('DIR_WS_TEMPLATES_SYSTEMADMIN', DIR_WS_TEMPLATES . 'systemAdmin/');

define('DIR_WS_CONTENT', DIR_WS_TEMPLATES . 'content/');

define('DIR_WS_CONTENT_AFFILIATES', DIR_WS_TEMPLATES_AFFILIATES . 'content/');
define('DIR_WS_CONTENT_MERCHANT', DIR_WS_TEMPLATES_MERCHANT . 'content/');
define('DIR_WS_CONTENT_SYSTEMADMIN', DIR_WS_TEMPLATES_SYSTEMADMIN . 'content/');

define('MERCHANT_EMAIL', "kamrulzuiu@gmail.com");
define('PAYPAL_BUSINESS_ACCOUNT', "shyamk_1343291516_biz@gmail.com");
define('PAYPAL_BUYER_ACCOUNT', "shyamk_1343279978_per@gmail.com");
define('PAYPAL_BUYER_ACCOUNT_PASSWORD', "343280317");
define('PREFIX', "");
define('CURRENCY_CODE', "USD");


//define('ADMIN_PERPAGE_LIST', 10);
if(!empty($result))
{
 define('PERPAGE_LIST',$result['pagination_no']);    
}
else
{
  define('PERPAGE_LIST',2);   
}
 
      
define('booking_payment', 75); 

function isPostBack()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function dumpVar($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    exit();
}

function result_array($sql)
{
    $result = array();
    $query = mysql_query($sql);
    while ($data = mysql_fetch_array($query))
    {
        $result[] = $data;
    }
    $rows = count($result);
    if ($rows)
    {
        $total_global_rows = count($result);
        $total_inner_rows = count($result[0]);
        $count_total_inner_rows = $total_inner_rows / 2;

        for ($i = 0; $i < $total_global_rows; $i++)
        {
            for ($j = 0; $j < $count_total_inner_rows; $j++)
            {
                unset($result[$i][$j]);
            }
        }
    }
    return $result;
}

function row_array($sql)
{
    $result = array();
    $query = mysql_query($sql);
    $data = mysql_fetch_assoc($query);
    return $data;
}

function query($sql)
{
    mysql_query($sql);
}

function row_count($sql)
{
    $count = 0;
    $result = mysql_query($sql);
    $count = mysql_num_rows($result);
    return (int) $count;
}

function insert($table, $data)
{
    foreach ($data as $field => $value)
    {
        $fields[] = '`' . $field . '`';
        $values[] = "'" . mysql_real_escape_string($value) . "'";
    }
    $field_list = join(', ', $fields);
    $value_list = join(', ', $values);
    $query = "INSERT INTO `" . $table . "` (" . $field_list . ") VALUES (" . $value_list . ")";
    mysql_query($query) or die("Error: " . mysql_error());
    return mysql_insert_id();
}

function update($table, $data, $id_field, $id_value)
{
    foreach ($data as $field => $value)
    {
        $fields[] = sprintf("%s = '%s'", $field, mysql_real_escape_string($value));
    }
    $field_list = join(',', $fields);
    $query = sprintf("UPDATE %s SET %s WHERE %s = '%s'", $table, $field_list, $id_field, $id_value);
    mysql_query($query) or die("Error: " . mysql_error());
    return mysql_affected_rows();
}

function delete($table, $column, $data)
{
    $sql_delete = "DELETE FROM `$table` WHERE `$column` = '$data'";
    mysql_query($sql_delete);
}

define('MAILHEADER', "Reply-To: Nannies <no-reply@nannies.com>\r\n"
        . "Return-Path: Nannies <no-reply@nannies.com>\r\n"
        . "From: Nannies <no-reply@nannies.com>\r\n"
        . "Bcc: tratulx@gmail.com\r\n"
        . "Organization: Nannies\r\n"
        . "MIME-Version: 1.0\r\n"
        . "Content-type: text/html\r\n"
        . "X-Priority: 3\r\n"
        . "X-Mailer: PHP" . phpversion() . "\r\n"
);


  ###pagination start#####  
    
   
function createPagination($total, $callback, $numberperpage, $currentpage, $trail='')
{
     $data = "";
     $prevpage = $currentpage-1;
     if($total<=$numberperpage)
     {
        return "&nbsp;";
     }
     $lastpage = ceil($total/$numberperpage);
     if ($lastpage > 5 && $currentpage>3)
     {
          # if middle point should be > 3
          if ($lastpage-$currentpage>1)
          {
            # if gap between middle and last is > 1
            $middlepoint = $currentpage;
          }
          else
          {
            # otherwise middle should be respect to last
            $middlepoint = $lastpage - 2;
          }
     }
     else
     {
        $middlepoint = 3;
     }
     if ($middlepoint>3)
     {  
      $data .="<a href='{$callback}1{$trail}'>First</a>&nbsp;&nbsp;\n";
     }
     if ($currentpage>1)
     {  
         $data .="<a href='{$callback}{$prevpage}{$trail}'>Prev</a>&nbsp;&nbsp;\n";
     }
     $startpoint=$middlepoint-2;
     $endpoint =  ($lastpage > 5) ? $middlepoint+2 : $lastpage;
     //echo $startpoint;
     for($i=$startpoint; $i<=$endpoint; $i++)
     {
          if ($i == $currentpage)
          { 
            $data .= "<a class='active' href='{$callback}{$i}{$trail}'>{$i}</a>";
          }
          else
          { 
            $data .= "<a href='{$callback}{$i}{$trail}'>{$i}</a>";
          }
          if($i < $endpoint)
          {
            $data .= "&nbsp;&nbsp;\n";
          }
     }
     $pageid  = $currentpage + 1;
     if ($currentpage<($lastpage))
     {
        $data .="&nbsp;&nbsp;\n<a href='{$callback}{$pageid}{$trail}'>Next</a>";
     }
     if (($lastpage-$currentpage)>2)
     {
       $data .="&nbsp;&nbsp;\n<a href='{$callback}{$lastpage}{$trail}'>Last</a>";
     }
     return $data;
}

####pagination end ####


if(!function_exists('getCountryList'))
{
    function getCountryList()
    {
        return array(   'US' => 'United States',
                        'GB' => 'United Kingdom',
                        'CA' => 'Canada',
                        'AU' => 'Australia',
                        'AL' => 'Albania',
                        'DZ' => 'Algeria',
                        'AS' => 'American Samoa',
                        'AD' => 'Andorra',
                        'AO' => 'Angola',
                        'AI' => 'Anguilla',
                        'AQ' => 'Antarctica',
                        'AG' => 'Antigua And Barbuda',
                        'AR' => 'Argentina',
                        'AM' => 'Armenia',
                        'AW' => 'Aruba',
                        'AT' => 'Austria',
                        'AZ' => 'Azerbaijan',
                        'BS' => 'Bahamas',
                        'BH' => 'Bahrain',
                        'BD' => 'Bangladesh',
                        'BB' => 'Barbados',
                        'BY' => 'Belarus',
                        'BE' => 'Belgium',
                        'BZ' => 'Belize',
                        'BJ' => 'Benin',
                        'BM' => 'Bermuda',
                        'BT' => 'Bhutan',
                        'BO' => 'Bolivia',
                        'BA' => 'Bosnia And Herzegovina',
                        'BW' => 'Botswana',
                        'BV' => 'Bouvet Island',
                        'BR' => 'Brazil',
                        'IO' => 'British Indian Ocean Territory',
                        'BN' => 'Brunei Darussalam',
                        'BG' => 'Bulgaria',
                        'BF' => 'Burkina Faso',
                        'BI' => 'Burundi',
                        'KH' => 'Cambodia',
                        'CM' => 'Cameroon',
                        'CV' => 'Cape Verde',
                        'KY' => 'Cayman Islands',
                        'CF' => 'Central African Republic',
                        'TD' => 'Chad',
                        'CL' => 'Chile',
                        'CN' => 'China',
                        'CX' => 'Christmas Island',
                        'CC' => 'Cocos (Keeling) Islands',
                        'CO' => 'Colombia',
                        'KM' => 'Comoros',
                        'CG' => 'Congo',
                        'CD' => 'Congo ; The Dem. Rep. Of The',
                        'CK' => 'Cook Islands',
                        'CR' => 'Costa Rica',
                        'CI' => 'Cote D\'ivoire',
                        'HR' => 'Croatia',
                        'CY' => 'Cyprus',
                        'CZ' => 'Czech Republic',
                        'DK' => 'Denmark',
                        'DJ' => 'Djibouti',
                        'DM' => 'Dominica',
                        'DO' => 'Dominican Republic',
                        'TP' => 'East Timor',
                        'EC' => 'Ecuador',
                        'EG' => 'Egypt',
                        'SV' => 'El Salvador',
                        'GQ' => 'Equatorial Guinea',
                        'ER' => 'Eritrea',
                        'EE' => 'Estonia',
                        'ET' => 'Ethiopia',
                        'FK' => 'Falkland Islands (Malvinas)',
                        'FO' => 'Faroe Islands',
                        'FJ' => 'Fiji',
                        'FI' => 'Finland',
                        'FR' => 'France',
                        'GF' => 'French Guiana',
                        'PF' => 'French Polynesia',
                        'TF' => 'French Southern Territories',
                        'GA' => 'Gabon',
                        'GM' => 'Gambia',
                        'GE' => 'Georgia',
                        'DE' => 'Germany',
                        'GH' => 'Ghana',
                        'GI' => 'Gibraltar',
                        'GR' => 'Greece',
                        'GL' => 'Greenland',
                        'GD' => 'Grenada',
                        'GP' => 'Guadeloupe',
                        'GU' => 'Guam',
                        'GT' => 'Guatemala',
                        'GN' => 'Guinea',
                        'GW' => 'Guinea-Bissau',
                        'GY' => 'Guyana',
                        'HT' => 'Haiti',
                        'HM' => 'Heard Island And Mcdonald Islands',
                        'VA' => 'Holy See (Vatican City State)',
                        'HN' => 'Honduras',
                        'HK' => 'Hong Kong',
                        'HU' => 'Hungary',
                        'IS' => 'Iceland',
                        'IN' => 'India',
                        'ID' => 'Indonesia',
                        'IE' => 'Ireland',
                        'IL' => 'Israel',
                        'IT' => 'Italy',
                        'JM' => 'Jamaica',
                        'JP' => 'Japan',
                        'JO' => 'Jordan',
                        'KZ' => 'Kazakstan',
                        'KE' => 'Kenya',
                        'KI' => 'Kiribati',
                        'KW' => 'Kuwait',
                        'KG' => 'Kyrgyzstan',
                        'LA' => 'Lao People\'s Democratic Republic',
                        'LV' => 'Latvia',
                        'LB' => 'Lebanon',
                        'LS' => 'Lesotho',
                        'LY' => 'Libya',
                        'LI' => 'Liechtenstein',
                        'LT' => 'Lithuania',
                        'LU' => 'Luxembourg',
                        'MO' => 'Macau',
                        'MK' => 'Macedonia',
                        'MG' => 'Madagascar',
                        'MW' => 'Malawi',
                        'MY' => 'Malaysia',
                        'MV' => 'Maldives',
                        'ML' => 'Mali',
                        'MT' => 'Malta',
                        'MH' => 'Marshall Islands',
                        'MQ' => 'Martinique',
                        'MR' => 'Mauritania',
                        'MU' => 'Mauritius',
                        'YT' => 'Mayotte',
                        'MX' => 'Mexico',
                        'FM' => 'Micronesia; Federated States Of',
                        'MD' => 'Moldova; Republic Of',
                        'MC' => 'Monaco',
                        'MN' => 'Mongolia',
                        'MS' => 'Montserrat',
                        'MA' => 'Morocco',
                        'MZ' => 'Mozambique',
                        'NA' => 'Namibia',
                        'NR' => 'Nauru',
                        'NP' => 'Nepal',
                        'NL' => 'Netherlands',
                        'AN' => 'Netherlands Antilles',
                        'NC' => 'New Caledonia',
                        'NZ' => 'New Zealand',
                        'NI' => 'Nicaragua',
                        'NE' => 'Niger',
                        'NG' => 'Nigeria',
                        'NU' => 'Niue',
                        'NF' => 'Norfolk Island',
                        'MP' => 'Northern Mariana Islands',
                        'NO' => 'Norway',
                        'OM' => 'Oman',
                        'PK' => 'Pakistan',
                        'PW' => 'Palau',
                        'PS' => 'Palestinian Territory; Occupied',
                        'PA' => 'Panama',
                        'PG' => 'Papua New Guinea',
                        'PY' => 'Paraguay',
                        'PE' => 'Peru',
                        'PH' => 'Philippines',
                        'PN' => 'Pitcairn',
                        'PL' => 'Poland',
                        'PT' => 'Portugal',
                        'PR' => 'Puerto Rico',
                        'QA' => 'Qatar',
                        'RE' => 'Reunion',
                        'RO' => 'Romania',
                        'RU' => 'Russian Federation',
                        'RW' => 'Rwanda',
                        'SH' => 'Saint Helena',
                        'KN' => 'Saint Kitts And Nevis',
                        'LC' => 'Saint Lucia',
                        'PM' => 'Saint Pierre And Miquelon',
                        'VC' => 'Saint Vincent And The Grenadines',
                        'WS' => 'Samoa',
                        'SM' => 'San Marino',
                        'ST' => 'Sao Tome And Principe',
                        'SA' => 'Saudi Arabia',
                        'SN' => 'Senegal',
                        'SC' => 'Seychelles',
                        'SG' => 'Singapore',
                        'SK' => 'Slovakia',
                        'SI' => 'Slovenia',
                        'SB' => 'Solomon Islands',
                        'SO' => 'Somalia',
                        'ZA' => 'South Africa',
                        'GS' => 'South Georgia / South Sandwich Islands',
                        'ES' => 'Spain',
                        'LK' => 'Sri Lanka',
                        'SR' => 'Suriname',
                        'SJ' => 'Svalbard And Jan Mayen',
                        'SZ' => 'Swaziland',
                        'SE' => 'Sweden',
                        'CH' => 'Switzerland',
                        'SY' => 'Syrian Arab Republic',
                        'TW' => 'Taiwan',
                        'TJ' => 'Tajikistan',
                        'TZ' => 'Tanzania; United Republic Of',
                        'TH' => 'Thailand',
                        'TG' => 'Togo',
                        'TK' => 'Tokelau',
                        'TO' => 'Tonga',
                        'TT' => 'Trinidad And Tobago',
                        'TN' => 'Tunisia',
                        'TR' => 'Turkey',
                        'TM' => 'Turkmenistan',
                        'TC' => 'Turks And Caicos Islands',
                        'TV' => 'Tuvalu',
                        'UG' => 'Uganda',
                        'UA' => 'Ukraine',
                        'AE' => 'United Arab Emirates',
                        'UM' => 'United States Minor Outlying Islands',
                        'UY' => 'Uruguay',
                        'UZ' => 'Uzbekistan',
                        'VU' => 'Vanuatu',
                        'VE' => 'Venezuela',
                        'VN' => 'Viet Nam',
                        'VG' => 'Virgin Islands; British',
                        'VI' => 'Virgin Islands; U.S.',
                        'WF' => 'Wallis And Futuna',
                        'EH' => 'Western Sahara',
                        'YE' => 'Yemen',
                        'YU' => 'Yugoslavia',
                        'ZM' => 'Zambia'
                    );

    } 
}
if(!function_exists('getCountryFullName'))
{
    function getCountryFullName($abbr)
    {
        if(strlen($abbr) == 2)
        {
            $countries = getCountryList();

            return isset($countries[$abbr]) ? $countries[$abbr] : '';
        }
        return $abbr;
    }
}
?>