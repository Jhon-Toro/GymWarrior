<?php 
require 'funciones.php';

$_SESSION =  [];

session_unset();
session_destroy();

header('location: ../../../login.php');














