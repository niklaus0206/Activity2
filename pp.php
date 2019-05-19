<?php
include "config.php";
$getUsers = $DB->query("SELECT * FROM tbl_sam");
var_dump($getUsers);