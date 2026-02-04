<?php
require_once __DIR__ . "/../modely/Pojisteny.php";
require_once __DIR__ . "/../modely/PojisteniApp.php";

class PojisteniController
{
    private $app;

    public function __construct()
    {
        session_start();
        $this->app = new PojisteniApp();
    }

    public function index()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $pojisteny = new Pojisteny(
                $_POST["jmeno"],
                $_POST["prijmeni"],
                (int)$_POST["vek"],
                $_POST["telefon"]
            );

            $this->app->pridej($pojisteny);
            header("Location: index.php");
            exit;
        }

        $pojisteni = $this->app->vratVsechny();
        require __DIR__ . "/../pohledy/pojisteni.php";
    }
}
