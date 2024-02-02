<?php

//menambahkan class database

require('../db/database.php');
$db = new Database();

//mengambil data no menggunakan GET
$id = $_GET['id'];

//buat query untuk melakukan penghapusan data di table
$db->query('DELETE FROM loans WHERE id=:id');

//binding data query dengan variable
$db->bind(':id', $id);

//execute query ke database
$db->execute();

//kembalikan ke halamaan data_buku.php
header("Location: ../data_loans.php");