<?php

require('../db/database.php');
$db = new Database();

$id = $_POST['id'];
$denda = $_POST['denda'];
$ket = $_POST['ket'];

$db->query('UPDATE loans SET end_date = now(), denda :denda, ket = :ket WHERE id = :id');

$db->bind(':id', $id);
$db->bind(':denda', $denda);
$db->bind(':ket', $ket);

$db->execute();

header("Location: ../data_loans.php");
