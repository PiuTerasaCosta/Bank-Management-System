<?php
session_start();
$aDate= date("d/m/y");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["Name"])&&isset($_POST["duedate"])&&isset($_POST["workerID"])){
        $Statuse="Pending";
        include_once "../model/workerModel.php";
        create($_POST["Name"],$Statuse,$aDate,$_POST["duedate"],$_POST["workerID"]);
    }
    else{
        echo "ERROR";
    }
}
