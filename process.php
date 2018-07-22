<?php

require_once("dbcontroller.php");
$db_handle = new DBController();
$db = $db_handle->connectDB();

$radioVar1 = $_POST['radioVar1'];
$radioVar2 = $_POST['radioVar2'];
$radioVar3 = $_POST['radioVar3'];
$radioVar4 = $_POST['radioVar4'];

$q1 = $radioVar1;
$q2 = $radioVar2;
$q3 = $radioVar3;
$q4 = $radioVar4;

$query = ("INSERT INTO Survey_Answers (q1, q2, q3, q4) VALUES('$q1', '$q2', '$q3','$q4')");

$result = $db_handle->insertQuery($query);
