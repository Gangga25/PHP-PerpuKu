<?php

require('../db/database.php');
$db = new Database();

$username = $_POST['username'];
$password = $_POST['password'];
$jk = $_POST['jk'];
$status = $_POST['status'];

$db->query('UPDATE admins SET username = :username, password = :password, jk = :jk, status = :status WHERE admins = :admins');

$db->bind(':username', $username);
$db->bind(':password', $password);
$db->bind(':jk', $jk);
$db->bind(':status', $status);

$db->execute();

header("Location: ../data_admin.php");
