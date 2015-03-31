<?php
function queryExchangeRate() {
    $from = $_POST['from_input'];   //  convert from this currency
    $to = $_POST['to_input'];       //  convert to this currency
    $url = 'http://download.finance.yahoo.com/d/quotes.csv?s='.$from.$to.'=X&f=l1&e=.csv';  //  url for query of yahoo finance
    $handle = curl_init($url);  //  initializes cURL
    curl_setopt ($handle, CURLOPT_RETURNTRANSFER, true);    //  set options for cURL
    $data = curl_exec($handle); //  execute query
    curl_close($handle);    //  close query
    return $data;   //  return result
}

function makeConversion() {
    $amount = $_POST['amount']; //  get amount entered
    $amount = (float) $amount * (float) queryExchangeRate();    //  do currency conversion
    return round($amount, 2);   //  return amount rounded to two decimal places
}

function setConversion() {
    $_POST['result'] = makeConversion();    //  set the result
}

setConversion();
include 'index.php';    //  reloads form
?>