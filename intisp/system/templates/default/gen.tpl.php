<?php

/*
 * Adaclare IntISP System
 * Copyright Adaclare Technologies 2007-2018
 * https://www.adaclare.com
 * https://github.com/INTisp
 *
 */

session_start();
if (isset($_GET['id'])) {
    if (file_exists('data/'.$_GET['id'].'.php')) {
        $_SESSION['planid'] = $_GET['id'];
        header('Location: api.php');
    }
}
