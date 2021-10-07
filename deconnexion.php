<?php

session_start ();

unset($_SESSION["prenom"]);

unset($_SESSION["adresseMail"]);

header("Location: index.html");

   exit();

 ?>  