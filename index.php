<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
</head>

<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<?php

include("templates/header.php");
?>



<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" >
    <thead>
    <tr>
        <th data-field="id">Номер валюты</th>
        <th data-field="name">Буквенный код валюты</th>
        <th data-field="fullName">Наименование иностранной валюты</th>
        <th data-field="kurs">Официальный курс</th>
    </tr>
    </thead>
<?php

$db = mysql_connect ("localhost","root");
mysql_select_db("baza",$db);
$result = mysql_query("select idkyrs, valyta, fullNameValuta, kurs from kyrs",$db);

while ($row =  mysql_fetch_array($result)){
    echo "
    
        <tbody>
          <tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
          </tr>
    
    ";
}
?>



</body>
</html>