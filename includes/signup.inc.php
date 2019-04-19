<?php
if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';

    $username = $_POST['uname'];
    $email = $_POST['mail'];
    $password = $_POST['pswd'];
    $passwordconfirm = $_POST['pswd_confirm'];

//if (empty($username) ){

}

