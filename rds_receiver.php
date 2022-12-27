<?php
include('db.php');
$number = mysqli_real_escape_string($write, $_POST['number']);
$species = mysqli_real_escape_string($write, $_POST['species']);
$name = mysqli_real_escape_string($write, $_POST['name']);
$weight = mysqli_real_escape_string($write, $_POST['weight']);
$description = mysqli_real_escape_string($write, $_POST['description']);
$sql = "INSERT INTO pet(number, species, name, weight, description, created) VALUES('{$number}','{$species}','{$name}','{$weight}','{$description}',NOW())";
mysqli_query($write,$sql);
header("Location: rds.php");
?>                                                                                                                                  