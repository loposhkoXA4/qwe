<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"/>
</head>

<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<?php

include("templates/header.php");
?>

<div style="margin-top: 50px; margin-left: 259px;" class="card small">

<div class="row">
    <form class="col s12" action="adminPanel.php" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Введите ваш логин" name="first_name"  type="text" class="validate">
                <label for="first_name">Логин менеджера</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input  type="password" name="passwordZ" class="validate">
                <label for="password">Пароль</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit">Войти
            <i class="material-icons right"></i>
        </button>
    </form>
</div>
</div>


</body>
</html>