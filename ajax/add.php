<?php
require_once("../conn.php");

// if id is set
// add from database 
// return success message

$new_year = (isset($_POST["new_year"])) ? $_POST["new_year"] : false;
$new_make = (isset($_POST["new_make"])) ? $_POST["new_make"] : false;
$new_model = (isset($_POST["new_model"])) ? $_POST["new_model"] : false;
$new_nickname = (isset($_POST["new_nickname"])) ? $_POST["new_nickname"] : false;


if($new_year && $new_make && $new_model && $new_nickname) {

    $insert_query = "INSERT INTO cars (year, make, model, nickname)
    VALUES ('$new_year', '$new_make', '$new_model', '$new_nickname')";

    $db-query($insert_query);
    echo ('🙌');
}

?>

