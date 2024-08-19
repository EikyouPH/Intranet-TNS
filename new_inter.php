<?php

$nom_inter = $_POST["nom-intervention"];
$lieu_inter = $_POST["lieu"];
$date_inter = $_POST["date"];
$type_inter = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
$desc_inter = $_POST["description"];
$emp_1 = $_POST["employe_1"];
$emp_2 = $_POST["employe_2"];
$emp_3 = $_POST["employe_3"];


if (!$emp_1 and !$emp_2 and !$emp_3) {
    die("Vous devez sélectionner au moins un employé");
}

if ($emp_1) {
    $emp_1 = "Kevin";
}
if ($emp_2) {
    $emp_2 = "Maxime";
}
if ($emp_3) {
    $emp_3 = "Steeve";
}

if (!$emp_1 and !$emp_2) {
    $emp_1 = $emp_3;
    $emp_2 = NULL;
    $emp_3 = NULL;
}

if (!$emp_2) {
    $emp_2 = $employe_3;
    $emp_3 = NULL;
}

if (!$emp_1) {
    $emp_1 = $emp_2;
    $emp_2 = $emp_3;
    $emp_3 = NULL;
}

//Database connection

$conn = new mysqli('localhost', 'db_user', 'ValEikyou67', 'intranet-tns');
if($conn->connect_error){
    die('Connection failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into interventions(nom_inter, date_inter, lieu_inter, type_inter, desc_inter, emp_1, emp_2, emp_3)
    values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssissss",$nom_inter, $date_inter, $lieu_inter, $type_inter, $desc_inter, $emp_1, $emp_2, $emp_3);
    $stmt->execute();
    echo "nouvelle intervention créée.";
    $stmt->close();
    $conn->close();
}

?>
