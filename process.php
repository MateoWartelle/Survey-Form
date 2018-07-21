<?php

require_once("dbcontroller.php");
$db_handle = new DBController();
$db = $db_handle->connectDB();

if (isset($_POST['Result'])) {
    $q1 = $_POST["radio1"];
    $q2 = $_POST["radio2"];
    $q3 = $_POST["radio3"];
    $q4 = $_POST["radio4"];
}

$query = "INSERT INTO Survey_Answers (q1, q2, q3, q4) VALUES
		('" . $q1 . "','" . $q2 . "', '" . $q3 . "','" . $q4 . "')";
$result = $db_handle->insertQuery($query);
if (!empty($result)) {
    $error_message = "";
    $success_message = "You have inserted successfully!";
} else {
    $error_message = "problem inserting";
}