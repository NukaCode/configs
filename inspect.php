<?php
/**
 * Schema Import script
 * Use this script to create an import json object of your database.
 *
 * @author Brandon Hyde <hyde.brandon@gmail.com>
 * @version 0.0.1 Initial Release
 * @license https://opensource.org/licenses/MIT MIT
 * @link http://schema.nukacode.com/import
 * @see http://schema.nukacode.com/import-scripts
 */

/**
 * Please fill in your database host, port, name, username and password.
 * Once you run the script copy to output and paste it into schema.nukacode.com/import
 */
$host     = '127.0.0.1';
$port     = '3306';
$name     = 'schema';
$username = 'root';
$password = '';

/**
 * No edits should be needed below this comment.
 */
$dsn = "mysql:dbname={$name};host={$host};port={$port}";

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    die('Could not connect to the database: ' . $e);
}

$jsonOutput = null;
$query      = $db->query('show tables');

foreach ($query->FetchAll(PDO::FETCH_ASSOC) as $table) {
    $tableName     = $table['Tables_in_' . $name];
    $describeTable = $db->query('describe `' . $tableName . '`');
    $tableIndex    = $db->query('show index from `' . $tableName . '`');

    foreach ($table as $key => $value) {
        $jsonOutput[$tableName]['columns'] = $describeTable->FetchAll(PDO::FETCH_ASSOC);
        $jsonOutput[$tableName]['indexes'] = $tableIndex->FetchAll(PDO::FETCH_ASSOC);
    }
}

echo json_encode($jsonOutput) . "\n";
