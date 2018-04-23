<?php

    $ip = '217.23.15.232'; // ML
    //$ip = '213.181.192.160'; // VK
    $ip = '72.52.4.119'; // DROOT
    //$ip = '173.243.199.227'; // EVOLVO
    //$ip = '213.246.199.30'; // ALTEN

    $access_key = '008cc7cd1aa5f62cefd95c9f9c832264';

// URL info ............................................................................................................


    $ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);
    curl_close($ch);
    $api_result = json_decode($json, true);

    #KEK($api_result);


// Country Info data from DB ...........................................................................................


    $country_info = db_array('SELECT * FROM countryinfo WHERE ISO="'.htmlspecialchars($api_result['country_code']).'" ')[0];


// Output - Array ......................................................................................................

    $location = Array();

    $location['ip'] = $ip;
    $location['iso'] = $api_result['country_code'];
    $location['isoLower'] = strtolower($api_result['country_code']);
    $location['iso3'] = $country_info['ISO3'];
    $location['iso3Lower'] = strtolower($country_info['ISO3']);
    $location['continent'] = $api_result['continent_name'];
    $location['country'] =$api_result['country_name'];
    $location['region'] =$api_result['region_name'];
    $location['city'] =$api_result['city'];
    $location['flag'] =$api_result['location']['country_flag'];
    $location['flagImageServer'] = '<img class="location_flag" alt="flag" src="'.$api_result['location']['country_flag'].'" style="max-width:24px;"/>';
    $location['flagImageLocal4x3'] = '<img class="location_flag" alt="flag" src="flags/4x3/'.strtolower($api_result['country_code']).'.svg" style="max-width:24px;"/>';
    $location['flagImageLocal1x1'] = '<img class="location_flag" alt="flag" src="flags/1x1/'.strtolower($api_result['country_code']).'.svg" style="max-width:24px;"/>';
    $location['map'] = '<a href="https://www.google.hu/maps/place/'.$api_result['country_name'].'+'.$api_result['region_name'].'+'.$api_result['city'].'" target="blank">click here</a>';
    $location['countryCapital'] = $api_result['location']['capital'];
    $location['areaSqrKm'] = $country_info['Areain_sq_km'];
    $location['population'] = $country_info['Population'];
    $location['domain'] = $country_info['tld'];
    $location['currencyCode'] = $country_info['CurrencyCode'];
    $location['currencyCodeLower'] = strtolower($country_info['CurrencyCode']);
    $location['currencyName'] = $country_info['CurrencyName'];
    $location['phonePrefix'] = $country_info['Phone'];

    $_SESSION['location_iso'] = $api_result['country_code'];
    $_SESSION['location_currencyCode'] = $api_result['country_code'];
    $_SESSION['location_currencyName'] = $api_result['country_code'];

    //KEK($location);

?>