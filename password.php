<?php
session_start();


if(isset($_SESSION['generatedPassword'])) {
    $generatedPassword = $_SESSION['generatedPassword'];
    echo "La tua Password è: $generatedPassword";
}