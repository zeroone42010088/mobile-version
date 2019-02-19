<?php require 'config.php';
$dir = basename(dirname(__FILE__)); 
//if login
//print_r($_COOKIE);
//exit();
if(isset($_POST['email']) && isset($_POST['pass'])):
        $email = strip_tags($_POST['email']);
        $login = strip_tags($_POST['email']);
        $pass = md5($_POST['pass']);
        $code = rand(1000000,9999999);


        $query = $db->query("SELECT * FROM `users`  WHERE (`pass` = '$pass' AND `login`= '$login') OR (`pass` = '$pass' AND `email`= '$email')");
         
        $row = $query->fetch_assoc();

        if($row != ''):
            //var_dump($row);
            $id = $row['id'];
            $ip = $_SERVER['REMOTE_ADDR'];

            $query = $db->query("UPDATE `users` SET `ip`='$ip',`lastvisit`='$lastvisit',`code`='$code' WHERE `id`='$id'");
            setcookie('user', $login, time() + (86400 * 30 * 7), "/"); // 86400 = 1 day
            setcookie('pass', md5($_POST['pass']), time() + (86400 * 30 * 7), "/"); // 86400 = 1 day
            setcookie('code', $code, time() + (86400 * 30 * 7), "/"); // 86400 = 1 day
            ?>
            <script>location.href="/<?= $dir; ?>/dashboard";</script>
            <?php 
        else:
            echo '<div class="error">Неправильный логин/Email или пароль</div>';
        endif;
endif;

//if exists cookies
if(isset($_COOKIE['user']) && isset($_COOKIE['code']) && isset($_COOKIE['pass'])):
    $code = strip_tags($_COOKIE['code']);
    $user = strip_tags($_COOKIE['user']);
    $pass = strip_tags($_COOKIE['pass']);

    $query = $db->query("SELECT * FROM `users` WHERE `code` = '$code' AND `pass`='$pass'");

    $row = $query->fetch_assoc();
    if($row['login'] == $user || $row['email'] == $user):
        ?>
            <script>location.href="/<?= $dir; ?>/dashboard";</script>
            <?php 
    else:
        setcookie('user', '', time() - (86400 * 30 * 7), '/');
        setcookie('pass', '', time() - (86400 * 30 * 7), '/');
        setcookie('code', '', time() - (86400 * 30 * 7), '/');

    endif;
endif;
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="/<?= $dir; ?>/css/main.css">

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
    </head>
    <body class="text-center">
    <div class="container">
        <div class="row">
    <form class="form-signin" method="POST">
          <img class="mb-4" src="https://www.remontservo.ru/img/logo3.png" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Пожалуйста, войдите</h1>
          <label for="inputEmail" class="sr-only">Email или логин</label>
          <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email или логин" required="" autofocus="">
          <label for="inputPassword" class="sr-only">Пароль</label>
          <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Пароль" required="">

          <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
       
        </form>
    </div>
    </div>
    </body>
