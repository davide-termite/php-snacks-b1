<?php

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

$error = "Accesso negato";

if (empty($name) || empty($mail) || empty($age)) {
  echo $error;
} elseif (strlen($name) < 3) {
  echo $error;
} elseif (!strpos($mail, '@') || !strpos($mail, '.')) {
  echo $error;
} elseif (!is_numeric($age)) {
  echo $error;
} else {
  echo "Accesso riuscito";
};


?>
