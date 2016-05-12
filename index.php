

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
// include "/inc/Requests.php";
require "inc/Wufoo-PHP-API-Wrapper/WufooApiWrapper.php";
require "inc/pipedrive.php";
// include "/http.php";

$apiKey = '6393-IH1D-O54P-6NB1';
$subdomain = 'bradelcanfield';

// // curl -u 6393-IH1D-O54P-6NB1:footastic https://bradelcanfield.wufoo.com/api/v3/forms/untitled-form/entries.json?pretty=true

// ***************************************************

// getting the form entries json back from the Wufoo api
$wrapper = new WufooApiWrapper($apiKey, $subdomain);
$entries = $wrapper->getEntries('untitled-form');
$json = json_encode($entries, JSON_PRETTY_PRINT);
// echo $json;

$someArray = json_decode($json, true);

$someObject = json_decode($someJSON);

foreach ($someArray as $key => $value) {
    echo $value["Field1"] . "\n" . $value["Field2"] . "<br>";
}

$first_names = array_column($entries, 'first_name', 'id');
print_r($first_names);

// foreach ($entries as $entry) {
//   echo $entry{["Field1"]};
// }
// {
//     $entries[$key] = $row['Field1'];
// }
// array_multisort($first_name, SORT_DESC, $entries);

?>


  </body>
</html>
