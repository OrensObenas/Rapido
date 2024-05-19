<?php
session_start();
$_SESSION['message'] = 0;
$_SESSION['message1'] = 0;

header('Location: tp_licence.php');