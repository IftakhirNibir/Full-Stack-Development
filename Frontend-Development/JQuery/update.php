<?php
// Read the existing JSON file
$jsonFile = 'abc.json';
$jsonData = file_get_contents($jsonFile);

// Decode the JSON data into a PHP array
$data = json_decode($jsonData, true);

// Add new fields
$data['age'] = $_POST['age'];
$data['city'] = $_POST['city'];

// Encode the array back into JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Write the new JSON data back to the file
file_put_contents($jsonFile, $jsonData);

echo "Data updated successfully!";
?>


