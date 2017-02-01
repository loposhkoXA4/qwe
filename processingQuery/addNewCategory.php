<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>


<?php

include("../templates/header.php");
?>

<?php


$newValue = $_REQUEST["valueCateg"];
$newValue1 = $_REQUEST["valueCateg1"];
$newValue2 = $_REQUEST["valueCateg2"];


echo $newValue;


$db = mysql_connect ("localhost","root");
mysql_select_db("baza",$db);
$result = mysql_query(" INSERT INTO pokypka(operator, KH, summa) VALUES ('$newValue','$newValue1','$newValue2') ",$db);

if($result != null)
    echo "add";


?>



</body>
</html>