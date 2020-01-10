<?php
require_once("../conn.php");

// if $_POST["search"] isset and is not blank
$search = isset($_POST["search"]) && $_POST["search"] != "" ? $_POST["search"] : false;
$year = isset($_POST["year"]) ? $_POST["year"] : false;



$search = $db->real_escape_string(trim($search)); // Prevents mysql injection attacks 
$year = $db->real_escape_string(trim($year));



if($search || $year || $model) {
    $search_sql = "SELECT * FROM cars
               WHERE CONCAT_WS('',make, model) LIKE '%$search%'"; 

// WHERE CONCAT_WS('',make model) LIKE '%$search%'";     WHERE nickname LIKE '%$search%' AND model LIKE '%$model%'";

    if($year != 0) {
        $search_sql .= " AND year = $year";
    }

} else {
    $search_sql = "SELECT * FROM cars";
}

$result = $db->query($search_sql);

$cars = array();
while($row = $result->fetch_assoc()){
    $cars[] = $row; // append row to the $cars array
}
$db->close(); // Close connection when finished

echo json_encode($cars); // returns results in JavaScript Object-Notation
?>