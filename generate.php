<?php
require 'FileUtility.php';
require 'Random.php';

$people = Random::generatePeople(300);

// Write the generated data to a file
FileUtility::writeToFile('persons.csv', $people);

echo "300 records of people have been generated and saved to persons.csv.";
?>
