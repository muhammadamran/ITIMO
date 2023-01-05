<?php
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setApplicationName('Google Sheets API');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$path = 'data/credentials.json';
$client->setAuthConfig($path);
$service = new \Google_Service_Sheets($client);

// https://docs.google.com/spreadsheets/d/1BuWvIuslZkQ4_17nfeem3KDjCrgZTnHh1_slr2wMO3s/edit?resourcekey#gid=268040515
$spreadsheetId = '1BuWvIuslZkQ4_17nfeem3KDjCrgZTnHh1_slr2wMO3s';
$spreadsheet = $service->spreadsheets->get($spreadsheetId);
// var_dump($spreadsheet);

$range = 'Form Responses 1';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();
// var_dump($values);

$range = 'Form Responses 1!A1:F10';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();
// var_dump($values);

// Fetch the rows
$range = 'Form Responses 1';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$rows = $response->getValues();
// Remove the first one that contains headers
$headers = array_shift($rows);
// Combine the headers with each following row
$array = [];
foreach ($rows as $row) {
    $array[] = array_combine($headers, $row);
}
// var_dump($array);

$jsonString = json_encode($array, JSON_PRETTY_PRINT);
print($jsonString);
