<?php
require_once __DIR__ . "/Pojisteny.php";

class PojisteniApp
{
    public function __construct()
    {
        if (!isset($_SESSION["pojisteni"])) {
            $_SESSION["pojisteni"] = [];
        }
    }

    public function pridej($pojisteny)
    {
        $_SESSION["pojisteni"][] = $pojisteny;
    }

    public function vratVsechny()
    {
        return $_SESSION["pojisteni"];
    }
}

