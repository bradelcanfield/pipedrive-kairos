

<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test</title>
    <link rel="stylesheet" href="">

  </head>
  <body>
<?php
// require "inc/data.php";
require "inc/Wufoo-PHP-API-Wrapper/WufooApiWrapper.php";
require "inc/pipedrive.php";
require "index.html";
// Wufoo
$apiKey = '6393-IH1D-O54P-6NB1';
$subdomain = 'bradelcanfield';

// getting the form entries back from the Wufoo api and encoded to json
$wrapper = new WufooApiWrapper($apiKey, $subdomain);
$entries = $wrapper->getEntries('untitled-form');
$json = json_encode($entries, JSON_PRETTY_PRINT);

// decoding JSON data
$form_data = json_decode($json, true);
$data = json_decode($someJSON);

// looping through all of the data to only give back the first name and last name fields of all form entries
foreach ($form_data as $key => $value) {
    echo $value["Field1"] . "\n" . $value["Field2"] . "<br>";
    $lead_name_data[] = $value["Field1"] . "\n" . $value["Field2"];
    //storing select data as an array in a separate data.txt file
    file_put_contents('data.txt', var_export($lead_name_data, true));
}

$first_name = $value["Field1"];
$last_name = $value["Field2"];

// ******************************************************************************************************
// Pipedrive
// $url = 'https://api.pipedrive.com/v1/persons?api_token=0f6acf75a1d4bddda9f46fa6c30f4e675e806d3f';

// $lead_name = array('name' => $first_name . "\n" . $last_name);
// // Build Http query using $lead_name params
// $query = http_build_query($lead_name);
// // Create Http context details
// $contextData = array(
//     'method' => 'POST',
//     'header' => "Connection: close\r\n" .
//     "Content-Length: " . strlen($query) . "\r\n",
//     'content' => $query);
// // Create context resource for the request
// $context = stream_context_create(array('http' => $contextData));
// // Read page rendered as result of the POST request
// $result = file_get_contents(
//     $url, // page url
//     false,
//     $context);

?>
<h1>hello</h1>
  </body>
</html>
