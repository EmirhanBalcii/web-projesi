<?php

$dbhost = "sql102.epizy.com";
$dbuser = "epiz_31733555";
$dbpass = "33UVZKPm4DRZ3Eo";
$dbname = "epiz_31733555_kofteci_emirhan";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
