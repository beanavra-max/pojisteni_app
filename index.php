<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>PojištěníApp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once __DIR__ . "/kontrolery/PojisteniKontroler.php";

$controller = new PojisteniController();
$controller->index();
