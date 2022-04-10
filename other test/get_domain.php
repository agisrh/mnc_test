<?php

function get_domain($url){
    // extract segemen url
    $array=parse_url($url);
    // explode host
    $array['host']=explode('.', $array['host']);
    // get the first element of array
    $subdomain = $array['host'][0];

    return $subdomain;
}

    $url = "https://olahraga.okezone.com/2021/05/soal-test";
    echo get_domain($url);


?>
