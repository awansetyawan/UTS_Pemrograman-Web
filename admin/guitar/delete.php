<?php

session_start();
include("../../core/functions.php");

if (!isset($_GET['id'])) {
  header('Location: ./index.php');
}

$mitra = find("gitar", $_GET['id']);
$result = delete("gitar", $_GET['id']);

flash("{$gitar['nama']} berhasil dihapus!", "success");
header("Location: ./index.php");
