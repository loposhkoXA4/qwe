<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" >
    <thead>
    <tr>
        <th data-field="id">Номер покупки</th>
        <th data-field="name">Оператор</th>
        <th data-field="fullName">КН паспорта</th>
        <th data-field="kurs">Сумма покупки</th>
        <th data-field="edit">Редактировать</th>
    </tr>
    </thead>
    <?php
    $db = mysql_connect ("localhost","root");
    mysql_select_db("baza",$db);
    $result = mysql_query("select idpokypka,operator,KH,summa from pokypka",$db);

    while ($row = mysql_fetch_array($result)){
    ?>
    <tbody>
    <tr>
        <td><?=$row[0] ?></td>
        <td><?=$row[1]?></td>
        <td><?=$row[2]?></td>
        <td><?=$row[3]?></td>
        <td><a href="adminPanel.php?id=<? echo $row[0] ?>" >Редактировать</a></td>
    </tr>
    <?
    }
    ?>
</table>
<?php
$id = $_GET['id'];
$query1 = mysql_query("select idpokypka,operator,KH,summa from pokypka where idpokypka = '$id'");
$row1= mysql_fetch_array($query1);
if (isset($_POST['save']))
{
    $operators = $_POST['oper'];
    $passports = $_POST['pass'];
    $sums = $_POST['summa'];
    $queryq=mysql_query("UPDATE pokypka set operator='$operators', KH='$passports', summa='$sums' WHERE idpokypka='$id'");

}
?>

<div style="height: 100px; width: 300px; margin-top: 50px; margin-left: 30px;">
    <div class="card small">
        <form action="/processingQuery/addNewCategory.php" method="post">
            <a style="margin-left: 50px;">Введите данные</a>
            <div class="input-field col s2">
                <input placeholder="Введите оператора" name="valueCateg" type="text" class="validate">
                <input placeholder="Введите КН паспорта" name="valueCateg1" type="text" class="validate">
                <input placeholder="Введите сумму покупки" name="valueCateg2" type="text" class="validate">
                <button style="width: 100%" class="btn waves-effect waves-light" type="submit">Добавить
                </button>
            </div>
        </form>
    </div>
</div>
<div style="height: 100px; width: 300px; margin-top: 250px; margin-left: 30px;">
    <div class="card small">
        <form action="/templates/delete.php" method="post">
            <a style="margin-left: 50px;">Введите данные</a>
            <div class="input-field col s2">
                <input placeholder="Введите удаляемый номер покупки" name="del" type="text" class="validate">
                <button style="width: 100%" class="btn waves-effect waves-light" type="submit">Удалить
                </button>
            </div>
        </form>
    </div>

</div>
<div style="height: 50px; width: 300px; margin-top: 10px; margin-left: 430px;">
    <div class="card small">
        <form action="adminPanel.php?id=<? echo $id ?>" method="post">
            <a style="margin-left: 50px;">Редактирование данных</a>
            <div class="input-field col s2">
                <input name="oper" type="text" value ="<? echo $row1['operator'];?>">
                <input name="pass" type="text" value ="<? echo $row1['KH'];?>">
                <input name="summa" type="text" value ="<? echo $row1['summa'];?>" >
                <button type="submit" name= "save" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>