<?php

$name = $_POST["nom-intervention"];
$lieu = $_POST["lieu"];
$date = $_POST["date"];
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
$employe_1 = filter_input(INPUT_POST, "employe_1", FILTER_VALIDATE_BOOL);

$employe_2 = filter_input(INPUT_POST, "employe_2", FILTER_VALIDATE_BOOL);

$employe_3 = filter_input(INPUT_POST, "employe_3", FILTER_VALIDATE_BOOL);


if (!$employe_1 and !$employe_2 and !$employe_3) {
    die("Vous devez sélectionner au moins un employé");
}

if ($employe_1) {
    $employe_1 = 1;
}
if ($employe_2) {
    $employe_2 = 2;
}
if ($employe_3) {
    $employe_3 = 3;
}

if (!$employe_1 and !$employe_2) {
    $employe_1 = $employe_3;
    $employe_2 = NULL;
    $employe_3 = NULL;
}

if (!$employe_2) {
    $employe_2 = $employe_3;
    $employe_3 = NULL;
}

if (!$employe_1) {
    $employe_1 = $employe_2;
    $employe_2 = $employe_3;
    $employe_3 = NULL;
}

