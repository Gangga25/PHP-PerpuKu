<?php

require('../db/database.php');
$db = new Database();

$id_cus = $_POST['id_cus'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$jk = $_POST['jk'];

$db->query('UPDATE customers SET nama = :nama, alamat = :alamat, telp = :telp, jk = :jk WHERE id_cus = :id_cus');

$db->bind(':id_cus', $id_cus);
$db->bind(':nama', $nama);
$db->bind(':alamat', $alamat);
$db->bind(':telp', $telp);
$db->bind(':jk', $jk);

$db->execute();

header("Location: ../data_customer.php");
